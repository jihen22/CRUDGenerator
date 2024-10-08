<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;




class MyprojectController extends Controller
{
   

   public function index()
   {
       $user = Auth::user();
       $nameproject = ($user) ? $user->nameproject : null;
       $donnees = User::select('id', 'nameproject','language', 'date_format','laravel_version', 'created_at')
                      ->where('id', $user->id)
                      ->get();
       return view('admin.myproject', ['nameproject' => $nameproject, 'donnees' => $donnees]);
   } 
}