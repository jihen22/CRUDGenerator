<?php

namespace App\Http\Controllers;

use App\Models\sam1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;



class Sam1Controller extends Controller
{
    public function index()
    {
        
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $model = new sam1();
    
        foreach($input as $key => $value) {
            // Vérifiez si le nom de clé ne fait pas partie des colonnes de la table qui ne doivent pas être modifiées
            if ($key != 'id' && $key != 'remember_token' && $key != 'created_at' && $key != 'updated_at' && $key != '_token'  && $key != 'data')  {
                // Récupérer le nom de la colonne
                $column = $key;
                // Récupérer les données à enregistrer
                $data = $value;
                // Remplir l'attribut dynamique correspondant dans le modèle
                $model->{$column} = $data;
            }
        }
    
        // Enregistrer le modèle dans la base de données
        $model->save();
    
        return response()->json(['success' => true]);
    }
    

    
    public function edit($id)
    {
       
    }

    public function update(Request $request, $id)
    {
   
    }

    public function destroy($id)
    {
        
    }

    public function project($view, $table)
{
    $user = Auth::user();
    $nameproject = $user->nameproject;
 
    return $this->show(new Request(), $table, $view)->with('nameproject', $nameproject);
}
public function show(Request $request, $table, $view)
    {

        $columns = DB::getSchemaBuilder()->getColumnListing($table);
        $data = DB::table($table)->get();

        return view($view, compact('table', 'columns', 'data'));
    }
}
