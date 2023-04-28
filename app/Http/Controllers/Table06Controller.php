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



   
   


}
