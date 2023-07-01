<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

use App\Models\User;





class UsersController extends Controller
{
    
    
   
    public function index()
    {
        $user = Auth::user();
        $nameproject = $user->nameproject;
    
        $tableName = 'users';
        $selectedColumns = ['id', 'username', 'name', 'email'];
    
        if (Schema::hasTable($tableName)) {
            $columnNames = Schema::getColumnListing($tableName);
          
            $tableData = DB::table($tableName)->select($selectedColumns)->get();
    
            return view('users', [
                'columns' => $columnNames,
                'data' => $tableData
            ]);
        }
        return view('user', compact('nameproject'));
    }
    
   
    


}