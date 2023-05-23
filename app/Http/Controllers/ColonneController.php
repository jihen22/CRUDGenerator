<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Schema;

use App\Field;
use Illuminate\Http\Request;

class ColonneController extends Controller
{
    public function showColumns($table)
    {
        $hiddenColumns = ['created_at', 'updated_at', 'remember_token'];
    
        $columns = Schema::getColumnListing($table);
        $visibleColumns = array_diff($columns, $hiddenColumns);
    
        return view('colonne', compact('table', 'visibleColumns'));
    }


    public function deleteColumn($table, $columnName)
    {
        try {
            Schema::table($table, function ($table) use ($columnName) {
                $table->dropColumn($columnName);
            });

            return response()->json(['message' => 'Colonne supprimée avec succès']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Une erreur s\'est produite lors de la suppression de la colonne.'], 500);
        }
    }
   


}
