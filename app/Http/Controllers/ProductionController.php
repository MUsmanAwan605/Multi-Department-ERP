<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProductionController extends Controller
{
    public function productionDashboard(){
        $id= Auth::user()->id;
        $profileData = User::find($id); 

        return view('production.index', compact('profileData'));
    }

    public function productionLogin(){
        return view('production.production_login');
    }

    public function productionProfile(){
        $id= Auth::user()->id;
        $profileData = User::find($id); 
        return view('production.production_profile_view', compact('profileData'));
    }

    public function productionlogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/production/production_login');
    }
    public function productionProfileStore(Request $request){

        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;

        if ($request->file('photo')) {
           $file = $request->file('photo');
           @unlink(public_path('uploads/production_images/'.$data->photo));
           $filename = date('YmdHi').$file->getClientOriginalName();
           $file->move(public_path('uploads/production_images'),$filename);
           $data['photo'] = $filename; 
        }

        $data->save();

        $notification = array(
            'message' => 'production Profile Updated SuccessFully',
            'Alert-type' => 'success'
       );
       
       return redirect()->back()->with($notification);
      
       

    }// End Method

    public function productionChangePassword(Request $request){

        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('production.production_change_password',compact('profileData'));

    }

    public function productionPasswordUpdate(Request $request){

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
