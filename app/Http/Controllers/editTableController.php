<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Table;
use App\Field;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;



class editTableController extends Controller
{
    
    public function add(Request $request)
    {
        // Récupérer les données du formulaire
        $tableName = $request->input('table_name');
        $fieldType = $request->input('field_type');
        $databaseColumnName = $request->input('database_column_name');
        $validation = "test";
        $visualTitle = $request->input('visual_title');
        $inList = $request->input('in_list') ? 1 : 0;
        $inCreate = $request->input('in_create') ? 1 : 0;
        $inShow = $request->input('in_show') ? 1 : 0;
        $inEdit = $request->input('in_edit') ? 1 : 0;
        $max = $request->input('max');
        $min = $request->input('min');
     
        $defaultValue = $request->input('default_value');
// Vérifier si la table existe
if (Schema::hasTable($tableName)) {
    Schema::table($tableName, function (Blueprint $table) use ($fieldType, $databaseColumnName) {
        // Ajouter la nouvelle colonne à la table avec la valeur par défaut NULL
        $table->$fieldType($databaseColumnName)->nullable()->default(null);
    });


            // Obtenir l'ID de la table à partir de la table 'tableslist'
            $tableId = Table::where('name', $tableName)->first()->id;

            // Mettre à jour les métadonnées de la colonne dans la table 'fieldslist4'
            $columnsTable = 'fieldslist4';
            $columnMetadata = [
                'table_id' => $tableId,
                'field_type' => $fieldType,
                'database_column_name' => $databaseColumnName,
                'validation' => $validation,
                'visual_title' => $visualTitle,
                'in_list' => $inList,
                'in_create' => $inCreate,
                'in_show' => $inShow,
                'in_edit' => $inEdit,
                'max' => $max,
                'min' => $min ,
                'default_value' => $defaultValue,
            ];
          
               
            DB::table($columnsTable)->insert($columnMetadata);
            return redirect()->back()->with('success', 'La colonne a été ajoutée avec succès.');
        } else {
            return redirect()->back()->with('error', "La table $tableName n'existe pas.");
        }
    }

}



