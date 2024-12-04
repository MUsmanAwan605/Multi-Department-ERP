<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class HrController extends Controller
{
    public function hrDashboard(){
        $id= Auth::user()->id;
        $profileData = User::find($id); 

        return view('hr.index', compact('profileData'));
    }

    public function hrLogin(){
        return view('hr.hr_login');
    }

    public function hrProfile(){
        $id= Auth::user()->id;
        $profileData = User::find($id); 
        return view('hr.hr_profile_view', compact('profileData'));
    }

    public function hrlogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/hr/hr_login');
    }
    public function hrProfileStore(Request $request){

        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;

        if ($request->file('photo')) {
           $file = $request->file('photo');
           @unlink(public_path('uploads/hr_images/'.$data->photo));
           $filename = date('YmdHi').$file->getClientOriginalName();
           $file->move(public_path('uploads/hr_images'),$filename);
           $data['photo'] = $filename; 
        }

        $data->save();

        $notification = array(
            'message' => 'hr Profile Updated SuccessFully',
            'Alert-type' => 'success'
       );
       
       return redirect()->back()->with($notification);
      
       

    }// End Method

    public function hrChangePassword(Request $request){

        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('hr.hr_change_password',compact('profileData'));

    }

    public function hrPasswordUpdate(Request $request){

        /// Validation 
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed'
        ]);

        if (!Hash::check($request->old_password, auth::user()->password)) {

            $notification = array(
                'message' => 'Old Password Does not Match!',
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }

        /// Update The new Password 
        User::whereId(auth::user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        $notification = array(
            'message' => 'Password Change Successfully',
            'alert-type' => 'success'
        );
        return back()->with($notification); 

    }// End Method
}
