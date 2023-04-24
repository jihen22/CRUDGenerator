<?php

namespace App\Http\Controllers;
use App\Models\User;


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
public function store(Request $request, $table)
{
    // Créer une nouvelle instance de la classe correspondante à la table
    $newRow = new $table;

    // Parcourir les données envoyées via le formulaire et les ajouter à la nouvelle instance
    foreach ($request->input() as $key => $value) {
        if ($key !== '_token') {
            $newRow->{$key} = $value;
        }
    }

    // Enregistrer la nouvelle instance dans la base de données
    $newRow->save();

    // Rediriger vers la vue correspondante
    return redirect()->back();


    }

}