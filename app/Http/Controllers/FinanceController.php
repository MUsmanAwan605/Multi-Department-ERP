<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class FinanceController extends Controller
{
    public function financeDashboard(){
        $id= Auth::user()->id;
        $profileData = User::find($id); 

        return view('finance.index', compact('profileData'));
    }

    public function financeLogin(){
        return view('finance.finance_login');
    }

    public function financeProfile(){
        $id= Auth::user()->id;
        $profileData = User::find($id); 
        return view('finance.finance_profile_view', compact('profileData'));
    }

    public function financelogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/finance/finance_login');
    }
    public function financeProfileStore(Request $request){

        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;

        if ($request->file('photo')) {
           $file = $request->file('photo');
           @unlink(public_path('uploads/finance_images/'.$data->photo));
           $filename = date('YmdHi').$file->getClientOriginalName();
           $file->move(public_path('uploads/finance_images'),$filename);
           $data['photo'] = $filename; 
        }

        $data->save();

        $notification = array(
            'message' => 'Finance Profile Updated SuccessFully',
            'Alert-type' => 'success'
       );
       
       return redirect()->back()->with($notification);
      
       

    }// End Method

    public function financeChangePassword(Request $request){

        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('finance.finance_change_password',compact('profileData'));

    }

    public function financePasswordUpdate(Request $request){

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
