<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

use App\Models\table08;




class Table08Controller extends Controller
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
        table08::create($data);
    
        // Retourner une réponse JSON pour confirmer l'enregistrement des données
        return response()->json(['success' => true]);
    }




    public function deleteData($id)
    {
        //Trouver la ligne de données à supprimer
       $data = table08::find($id);

       
    
       if (!$data) {
           return response()->json(['error' => 'Ligne de données introuvable'], 404);
        }

       // Supprimer la ligne de données
       $data->delete();
    
        return response()->json(['success' => 'Ligne de données supprimée avec succès']);
   }


   public function updateRow(Request $request, $id)
   {
     // Récupérer la ligne correspondante dans la base de données en utilisant l'identifiant
     $row = table08::find($id);
   
     // Vérifier si la ligne a été trouvée
     if ($row) {
       // Récupérer tous les attributs du formulaire
       $input = $request->except('_token', '_method');
   
       // Supprimer la colonne 'row_id' de la liste des attributs à mettre à jour
       unset($input['row_id']);
   
       // Mettre à jour les attributs de la ligne avec les données du formulaire
       foreach ($input as $column => $value) {
         // Vérifier si la colonne existe avant de la mettre à jour
         if (Schema::hasColumn('table08', $column)) {
           $row->{$column} = $value;
         }
       }
   
       // Sauvegarder les modifications dans la base de données
       $row->save();
   
       // Rediriger ou retourner une réponse appropriée
       return response()->json(['success' => 'Ligne de données modifiée avec succès']);
     } else {
       // Gérer le cas où la ligne n'a pas été trouvée
       return response()->json(['error' => 'La ligne correspondante n\'a pas été trouvée']);
     }
   }
   



  
}


   
