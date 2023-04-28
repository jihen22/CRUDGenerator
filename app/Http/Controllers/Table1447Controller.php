<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\table1447;
use Illuminate\Support\Facades\Auth;




class Table1447Controller extends Controller
{
   

    public function project($view, $table)
    {
        $user = Auth::user();
        $nameproject = $user->nameproject;
 
        return $this->show(new Request(), $table, $view)->with('nameproject', $nameproject);
    }

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
    $model = new table1447();

    // Définir les propriétés de la nouvelle instance du modèle
    $model->col55 = $data;

    // Enregistrer la nouvelle instance du modèle dans la base de données
    $model->save();

    // Retourner une réponse JSON
    return response()->json(['success' => true]);
}

public function destroy($id)
{
    // Delete the row from the database
    Row::find($id)->delete();

    // Return a response indicating success
    return response()->json([
        'message' => 'Row deleted successfully',
    ]);
}

   


}
