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


class EditcolonneController extends Controller
{             
   

public function editColumn($table, $column)
{
    $user = Auth::user();
    $nameproject = $user->nameproject; 

    return view('editcolonne', compact('table', 'column'));
}


public function updateColumn(Request $request, $table, $column)
{
    // Valider les données du formulaire
    $validatedData = $request->validate([
        'database_column_name' => 'required',
        'visual_title' => 'required',
        'in_list' => 'required',
        'in_create' => 'required',
        'in_show' => 'required',
        'in_edit' => 'required',
        'max' => 'nullable|numeric',
        'min' => 'nullable|numeric',
        'default_value' => 'nullable|numeric',
    ]);

    // Récupérer les informations de la table à partir de TableList
    $tableInfo = Table::where('name', $table)->first();

    // Vérifier si la table existe
    if (!$tableInfo) {
        abort(404);
    }

    // Récupérer le champ à mettre à jour
    $field = Field::where('table_id', $tableInfo->id)
        ->where('database_column_name', $column)
        ->first();

    // Vérifier si le champ existe
    if (!$field) {
        abort(404);
    }

    // Mettre à jour les valeurs du champ avec les données du formulaire
    $field->database_column_name = $validatedData['database_column_name'];
    $field->visual_title = $validatedData['visual_title'];
    $field->in_list = $validatedData['in_list'];
    $field->in_create = $validatedData['in_create'];
    $field->in_show = $validatedData['in_show'];
    $field->in_edit = $validatedData['in_edit'];
    $field->max = $validatedData['max'];
    $field->min = $validatedData['min'];
    $field->default_value = $validatedData['default_value'];

    // Enregistrer les modifications dans la base de données
    $field->save();

    // Redirection vers la page précédente avec un message flash de succès
    return redirect()->back()->with('success', 'Column updated successfully!');
}
}

