<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{  
    public function dashboard()
   {
       $user = Auth::user();
       $nameproject = $user->nameproject;

       return view('admin.dashboard')->with('nameproject', $nameproject);
   }

   public function showTableNames()
{
    $user = Auth::user();
    $nameproject = $user->nameproject;
    $tables = DB::select('SHOW TABLES');

    return view('admin.dashboard', compact('nameproject', 'tables'));
}
    
}
