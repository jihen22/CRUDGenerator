<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;



class DashboardController extends Controller
{  
    public function dashboard()
   {
       $user = Auth::user();
       $nameproject = $user->nameproject;

       return view('admin.dashboard')->with('nameproject', $nameproject);
   }

   public function showTableNames()
{
    $user = Auth::user();
    $nameproject = $user->nameproject;
    $tables = DB::select('SHOW TABLES');

    return view('admin.dashboard', compact('nameproject', 'tables'));
}


//public function telecharger()
//{
   // $nom_fichier = 'Controller.stub';
    //$chemin = 'resources/stubs/Controller.stub';

    //return response()->download(
      //  base_path($chemin),
        //$nom_fichier,
        //[
          //  'Content-Type' => 'text/plain',
          //  'Content-Disposition' => 'attachment; filename=' . $nom_fichier,
        //]
   // );
//}

public function telecharger($table)
{
    $nom_fichier = $table . 'Controller.php';
    $chemin = 'app/Http/Controllers/' . $nom_fichier;

    return response()->download(
        base_path($chemin),
        $nom_fichier,
        [
            'Content-Type' => 'text/plain',
            'Content-Disposition' => 'attachment; filename=' . $nom_fichier,
        ]
    );
}

public function supprimerTable($table)
{
    // Supprimer la table
    DB::statement('DROP TABLE '.$table);

    // Supprimer le modèle
    $model_file = app_path('Models/'.$table.'.php');
    if (file_exists($model_file)) {
        unlink($model_file);
    }

    // Supprimer le contrôleur
    $controller_file = app_path('Http/Controllers/'.$table.'Controller.php');
    if (file_exists($controller_file)) {
        unlink($controller_file);
    }

    // Supprimer les vues
    $views_directory = resource_path('views/'.$table);
    if (file_exists($views_directory)) {
        $files = glob($views_directory.'/*'); 
        foreach($files as $file){ 
            if(is_file($file)) {
                unlink($file);
            }
        }
        rmdir($views_directory);
    }

    // Supprimer la migration
    $migration_file = database_path('migrations/*_create_'.$table.'_table.php');
    foreach(glob($migration_file) as $file) {
        unlink($file);
    }

    return redirect()->back()->with('success', 'Table supprimée avec succès avec son controller, model, vue et migration.');
}



    
}
