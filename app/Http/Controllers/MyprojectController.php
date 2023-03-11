<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class MyprojectController extends Controller
{
    public function myproject()
    {
        $user = Auth::user();
        $nameproject = $user->nameproject;
 
        return view('admin.myproject')->with('nameproject', $nameproject);
    }
}
