<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\table1;




class Table1Controller extends Controller
{
    
    
   

    public function index(Request $request, $table, $view)
    {

        $user = Auth::user();
        $nameproject = $user->nameproject;

        // Récupérer les données de la table
        $data = DB::table($table)->get();

        // Récupérer les noms des colonnes de la table
        $columns = DB::getSchemaBuilder()->getColumnListing($table);

        // Colonnes à cacher dans la vue
        $hiddenColumns = ['id', 'created_at', 'updated_at', 'remember_token'];

        // Retourner la vue
        return view($view, compact('table', 'data', 'columns', 'hiddenColumns', 'nameproject'));
    }

    public function store(Request $request)
    {
        // Récupérer les données du formulaire
        $data = $request->get('data');
     
    
        // Enregistrer les données dans la base de données en utilisant le modèle Eloquent User
        table1::create($data);
    
        // Retourner une réponse JSON pour confirmer l'enregistrement des données
        return response()->json(['success' => true]);
    }
    public function delete($id)
    {
        // Récupérer l'enregistrement à supprimer en fonction de l'id
        $record =table1::find($id);
    
        // Vérifier si l'enregistrement existe
        if (!$record) {
            return response()->json(['error' => 'Enregistrement non trouvé.']);
        }
    
        // Supprimer l'enregistrement de la base de données
        $record->delete();
        // Retourner une réponse JSON pour confirmer la suppression des données
        return response()->json(['success' => true]);
    }
    public function update(Request $request, $id)
{
    // Récupérer l'enregistrement à mettre à jour en fonction de l'id
    $record = table1::find($id);
    
    // Vérifier si l'enregistrement existe
    if (!$record) {
        return response()->json(['error' => 'Enregistrement non trouvé.']);
    }
    
    // Mettre à jour les champs de l'enregistrement avec les données envoyées dans la requête
    $record->field1 = $request->input('field1');

    // etc.
    
    // Sauvegarder les modifications dans la base de données
    $record->save();
    
    // Retourner une réponse JSON pour confirmer la mise à jour des données
    return response()->json(['success' => true]);
}

  

   
   


}