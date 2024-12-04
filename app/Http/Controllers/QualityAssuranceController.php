<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quality\Quality;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class QualityAssuranceController extends Controller
{

    public function qaDashboard(){
        $id= Auth::user()->id;
        $profileData = User::find($id);

        return view('quality.dashboard', compact('profileData'));
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $qualities= Quality::orderBy('id', 'DESC')->paginate(8);
        return view('quality/upload')->with(compact('qualities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('quality/add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'file_upload' => 'required|mimes:xlsx,xls',
            'file_name' => 'required',
            'date_of_upload'=>'required'
        ]);
        $filename = null;
        if(request()->hasFile('file_upload')){
            $file = request()->file('file_upload');
            $filename = md5($file->getClientOriginalName()).time().'.'.$file->getClientOriginalExtension();
            $file->move('./files',$filename);
        }
        Quality::create([
            'file_upload'=>$filename,
            'file_name' => request()->get('file_name'),
            'date_of_upload'=> request()->get('date_of_upload')
        ]);
        return redirect()->to('/qa/file-upload');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $quality = Quality::find($id);
        return view('quality/edit')->with(compact('quality'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate(request(), [
            'file_upload' => 'required|mimes:xlsx,xls',
            'file_name' => 'required',
            'date_of_upload'=>'required'
        ]);
        $quality=Quality::find($id);

        $filename = null;
        if(request()->hasFile('file_upload')){
            $file = request()->file('file_upload');
            $filename = md5($file->getClientOriginalName()).time().'.'.$file->getClientOriginalExtension();
            $file->move('./files',$filename);
        }
        else{
            $filename = $quality->file_upload;
        }

        $quality -> update([
            'file_upload'=>$filename,
            'file_name' => request()->get('file_name'),
            'date_of_upload'=> request()->get('date_of_upload')
        ]);
        return redirect()->to('qa/file-upload');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $quality = Quality::find($id);
        $quality->delete();
        return redirect()->to('/qa/file-upload');
    }



    // public function qaLogin(){
    //     return view('quality.quality_login');
    // }

    // public function qaProfile(){
    //     $id= Auth::user()->id;
    //     $profileData = User::find($id);
    //     return view('quality.quality_profile_view', compact('profileData'));
    // }

    // public function qalogout(Request $request)
    // {
    //     Auth::guard('web')->logout();

    //     $request->session()->invalidate();

    //     $request->session()->regenerateToken();

    //     return redirect('/qa/quality_login');
    // }
    // public function qaProfileStore(Request $request){

    //     $id = Auth::user()->id;
    //     $data = User::find($id);
    //     $data->name = $request->name;
    //     $data->username = $request->username;
    //     $data->email = $request->email;
    //     $data->phone = $request->phone;
    //     $data->address = $request->address;

    //     if ($request->file('photo')) {
    //        $file = $request->file('photo');
    //        @unlink(public_path('uploads/qa_images/'.$data->photo));
    //        $filename = date('YmdHi').$file->getClientOriginalName();
    //        $file->move(public_path('uploads/qa_images'),$filename);
    //        $data['photo'] = $filename;
    //     }

    //     $data->save();

    //     $notification = array(
    //         'message' => 'Quality Assurance Profile Updated SuccessFully',
    //         'Alert-type' => 'success'
    //    );

    //    return redirect()->back()->with($notification);



    // }// End Method

    // public function qaChangePassword(Request $request){

    //     $id = Auth::user()->id;
    //     $profileData = User::find($id);
    //     return view('quality.quality_change_password',compact('profileData'));

    // }

    // public function qaPasswordUpdate(Request $request){

    //     /// Validation
    //     $request->validate([
    //         'old_password' => 'required',
    //         'new_password' => 'required|confirmed'
    //     ]);

    //     if (!Hash::check($request->old_password, auth::user()->password)) {

    //         $notification = array(
    //             'message' => 'Old Password Does not Match!',
    //             'alert-type' => 'error'
    //         );
    //         return back()->with($notification);
    //     }

    //     /// Update The new Password
    //     User::whereId(auth::user()->id)->update([
    //         'password' => Hash::make($request->new_password)
    //     ]);

    //     $notification = array(
    //         'message' => 'Password Change Successfully',
    //         'alert-type' => 'success'
    //     );
    //     return back()->with($notification);

    // }// End Method
}
