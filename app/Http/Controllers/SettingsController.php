<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Validation\Rule;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SettingsController extends Controller
{
    public function settings()
    {
        $user = Auth::user();
        $nameproject = $user->nameproject;
 
        return view('admin.settings')->with('nameproject', $nameproject);
    }
    public function update(Request $request)
{
    $request->validate([
        'nameproject' => 'required|string',
        'email' => 'required|email',
    
        'language' => 'required|string',
        'date_format' => 'required|string'
    ]);

    $user = Auth::user();

    // Get the current email address from the database
    $current_email = $user->email;

    // Check if the email in the request matches the user's current email
    if ($current_email !== $request->email) {
        return redirect()->back()->with('error', 'Utilisateur non trouvé.');
    }

    $user->nameproject = $request->input('nameproject');
    $user->language = $request->input('language');
    $user->date_format = $request->input('date_format');

    $user->save();

    return redirect()->back()->with('success', 'Mise à jour réussie.');
}

public function edit()
{
    $user = Auth::user();

    // Récupérer le nom du projet actuel depuis la base de données
    $nameproject = DB::table('users')->where('id', 1)->value('nameproject');

    $email = $user->email;
    $language = $user->language;
    $date_format = $user->date_format;

 


    return view('admin.settings')->with([
        'user' => $user,
        'nameproject' => $nameproject,
        'email' => $email,
        'language' => $language,
        'date_format'=> $date_format
    

    ]);
}

}
