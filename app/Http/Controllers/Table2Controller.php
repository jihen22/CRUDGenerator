<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\table104;



class Table2Controller extends Controller
{
     

    public function show(Request $request, $table, $view,)
    {

        $columns = DB::getSchemaBuilder()->getColumnListing($table);
        $data = DB::table($table)->get();

        return view($view, compact('table', 'columns', 'data'));
    }

    public function store(Request $request, $table)
{
    // Récupérer les données saisies dans le formulaire
    $data = $request->input('data');

    // Créer une nouvelle instance du modèle correspondant à votre table
    $model = new table2();

    // Définir les propriétés de la nouvelle instance du modèle
    $model->col102 = $data;

    // Enregistrer la nouvelle instance du modèle dans la base de données
    $model->save();

    // Retourner une réponse JSON
    return response()->json(['success' => true]);
}

   
   


}
