<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



class ResetPasswordController extends Controller
{
    public function password()
    {
        $user = Auth::user();
        $nameproject = $user->nameproject;
 
        return view('admin.changepassword')->with('nameproject', $nameproject);
    }
    public function changePassword(Request $request) {
        
        $validation=$request->validate( [
            'current_password' => 'required',
            'password' => 'required|min:8',
            

        ]);
        
        
    
        $user = Auth::user();
        $hashedPassword = $user->password;
       
    
        if (Hash::check($request->current_password , $hashedPassword )) {
            
            if (!Hash::check($request->password , $hashedPassword)) {
                
                $user->password = Hash::make($request->password);
                $user->save();
                Auth::logout();
                return redirect()->route('login')->with('successMsg', 'Password changed successfully! Please login again.');

             
            } else {
                return redirect()->back()->with('errorMsg',"New password cannot be the same as old password !");
            }
        } else {
            return redirect()->back()->with('errorMsg',"Current password does not match !")->withInput();
        }    
    }
    
    

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/login';
}
