<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\table06;




class Table06Controller extends Controller
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
        table06::create($data);
    
        // Retourner une réponse JSON pour confirmer l'enregistrement des données
        return response()->json(['success' => true]);
    }

    public function deleteData($id)
    {
        // Trouver la ligne de données à supprimer
        $data = table06::find($id);
    
        if (!$data) {
            return response()->json(['error' => 'Ligne de données introuvable'], 404);
        }
    
        // Supprimer la ligne de données
        $data->delete();
    
        return response()->json(['success' => 'Ligne de données supprimée avec succès']);
    }

   
   


}
