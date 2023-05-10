<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use App\Models\User;
use Str;
use Hash ;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    /**
     * Override the username method to use the 'email' field instead of 'username'
     */
  
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/d';


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function username()
    { return 'username';
    }
    protected function authenticated($request, $user)
{
   return redirect('http://localhost:8000/myproject');
}

public function github()
{
    return Socialite::driver('github')->redirect();
}

public function githubredirect()
{
    $user = Socialite::driver('github')->user();


    $existingUser = User::where('email', $user->email)->first();

    if ($existingUser) {
        // Authenticate the existing user
        auth()->login($existingUser);
    } else {
        // Create a new user
        $newUser = new User();
        $newUser->name = $user->name;
        $newUser->email = $user->email;
        $newUser->save();

        auth()->login($newUser);
    }

    return redirect('http://localhost:8000/myproject');
}
public function google()
{
    return Socialite::driver('google')->redirect();
}

public function googleredirect()
{
    $user = Socialite::driver('google')->user();


    $existingUser = User::where('email', $user->email)->first();

    if ($existingUser) {
        // Authenticate the existing user
        auth()->login($existingUser);
    } else {
        // Create a new user
        $newUser = new User();
        $newUser->name = $user->name;
        $newUser->email = $user->email;
        $newUser->save();

        auth()->login($newUser);
    }

    return redirect('http://localhost:8000/myproject');
}

public function facebook()
{
    return Socialite::driver('facebook')->redirect();
}

public function facebookredirect()
{
    $user = Socialite::driver('google')->user();


    $existingUser = User::where('email', $user->email)->first();

    if ($existingUser) {
        // Authenticate the existing user
        auth()->login($existingUser);
    } else {
        // Create a new user
        $newUser = new User();
        $newUser->name = $user->name;
        $newUser->email = $user->email;
        $newUser->save();

        auth()->login($newUser);
    }

    return redirect('http://localhost:8000/myproject');
}

}
