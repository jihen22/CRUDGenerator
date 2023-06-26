<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Schema\Builder;

use App\Models\table001;

use App\Table;
use App\Field;


class ListController extends Controller
{
    
   


public function show(Request $request, $table, $view)
 
{
    
    $user = Auth::user();
    $nameproject = $user->nameproject;

// Récupérer les données de la table
$data = DB::table($table)->get();



    // Récupérer les colonnes de la table
    $columns = DB::getSchemaBuilder()->getColumnListing($table);


    
        // Récupérer les informations de la table à partir de TableList
        $tableInfo = Table::where('name', $table)->first();
        
    
        // Vérifier si la table existe
        if (!$tableInfo) {
            abort(404);
        }
    // Récupérer les informations des colonnes depuis la relation avec FieldList
    $fieldListRows = Field::select('field_type', 'database_column_name', 'validation', 'visual_title', 'max', 'default_value','created_at','updated_at','indexing','validationRules')
    ->where('table_id', $tableInfo->id)
    ->whereIn('database_column_name', $columns)
    ->get();

    

    return view($view, compact('fieldListRows', 'nameproject'));
}


}
    

