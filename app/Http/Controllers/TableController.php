<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TableController extends Controller
{
    
    public function show(Request $request, $table, $view)
{
    $columns = DB::getSchemaBuilder()->getColumnListing($table);
    $data = DB::table($table)->get();

    return view($view, compact('table', 'columns', 'data'));
}

    }

