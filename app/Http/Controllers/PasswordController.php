<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PasswordController extends Controller
{
    public function password()
    {
        $user = Auth::user();
        $nameproject = $user->nameproject;
 
        return view('admin.changepassword')->with('nameproject', $nameproject);
    }
    public function changePassword(Request $request) {
        $this->validate($request, [
            'current_password' => 'required',
            'password' => 'required|confirmed|min:8',
        ]);
    
        $user = Auth::user();
        $hashedPassword = $user->password;
    
        if (Hash::check($request->current_password , $hashedPassword )) {
            if (!Hash::check($request->password , $hashedPassword)) {
                $user->password = Hash::make($request->password);
                $user->save();
                Auth::logout();
                return redirect()->route('login')->with('successMsg',"Password changed successfully !");
            } else {
                return redirect()->back()->with('errorMsg',"New password cannot be the same as old password !");
            }
        } else {
            return redirect()->back()->with('errorMsg',"Current password does not match !");
        }    
    }
}
