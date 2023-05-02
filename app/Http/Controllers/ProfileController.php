<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{  
    public function editmyprofil()
    {
        $user = Auth::user();
        $nameproject = $user->nameproject;
        $email = $user->email;
 
        return view('admin.editmyprofil')->with('nameproject', $nameproject)->with('email', $email);
    }
    public function updateName(Request $request)
{
    // Validate the request data
      $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore(auth()->id())],
    ], [
        'email.unique' => 'This email address is already in use.',
        'email.required' => 'The email address is required.',
        'email.email' => 'The email address is invalid.',
    ]);

    // Get the currently authenticated user
    $user = Auth::user();

    // Get the current email address from the database
    $current_email = $user->email;

    // Check if the email in the request matches the user's current email
    if ($current_email !== $request->email) {
        return redirect()->back()->withErrors(['email' => 'The provided email address does not match your current email address.']);
    }

    // Update the user's name
    $user->name = $request->name;
    $user->save();

    // Redirect back to the profile page with a success message
    return redirect()->back()->with('success', 'Your profile has been updated successfully!');
}
    
}

