<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudTablesController extends Controller
{
   
    public function createTable(Request $request)
    {
        // Get form input
        $tableName = $request->input('table_name');
        $field1 = $request->input('field_1');
        $field2 = $request->input('field_2');
        $field3 = $request->input('field_3');

        // Create table
        Schema::create($tableName, function($table) use ($field1, $field2, $field3) {
            $table->id();
            $table->string($field1);
            $table->string($field2);
            $table->string($field3);
        });

        return "Table $tableName created successfully";
    }
}


