<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function settings()
    {
        $user = Auth::user();
        $nameproject = $user->nameproject;
 
        return view('admin.settings')->with('nameproject', $nameproject);
    }
}
