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
    // Récupérer les noms des fichiers à partir de la table "tablelist"
    $tablelist = DB::table('tableslist')->where('name', $table)->first();

    if (!$tablelist) {
        // La table demandée n'existe pas dans la table "tablelist"
        return response()->json(['error' => 'La table demandée n\'existe pas.']);
    }

    // Récupérer les noms des fichiers à partir de la table "tablelist"
    $controllerName = $tablelist->controller_name ;
    
    $viewName = $tablelist->view_name;
    $modelName = $tablelist->model_name;
    

    // Définir les chemins relatifs des fichiers
    $cheminController = base_path('app/Http/Controllers/' . $controllerName . 'Controller.php');
    $cheminModel = base_path('app/Models/' . $modelName . '.php');
    $cheminView = base_path('resources/views/' . $viewName . '.blade.php');


    // Vérifier si les fichiers existent
    if (!file_exists($cheminController)) {
        return response()->json(['error' => 'Le fichier du contrôleur n\'existe pas.']);
    }
    
    if (!file_exists($cheminModel)) {
        return response()->json(['error' => 'Le fichier du modèle n\'existe pas.']);
    }
    
    if (!file_exists($cheminView)) {
        return response()->json(['error' => 'Le fichier de la vue n\'existe pas.']);
    }
    

    // Lire le contenu des fichiers
    $controllerContent = file_get_contents($cheminController);
    $modelContent = file_get_contents($cheminModel);
    $viewContent = file_get_contents($cheminView);

    // Générer le contenu du fichier texte
    $content = "Controller Name: " . $controllerName . "\n";
    $content .= "Model Name: " . $modelName . "\n";
    $content .= "View Name: " . $viewName . "\n\n";
    $content .= "Controller Content:\n" . $controllerContent . "\n\n";
    $content .= "Model Content:\n" . $modelContent . "\n\n";
    $content .= "View Content:\n" . $viewContent . "\n";

    // Générer un nom de fichier unique
    $filename = $table . '_info.txt';

    // Télécharger le fichier texte
    return response($content)
        ->header('Content-Type', 'text/plain')
        ->header('Content-Disposition', 'attachment; filename="' . $filename . '"');
}



public function supprimerTable($table)
{
    // Supprimer la table
    DB::statement('DROP TABLE '.$table);


     // Récupérer les noms des fichiers à partir de la table "tablelist"
     $tablelist = DB::table('tableslist')->where('name', $table)->first();

     if (!$tablelist) {
         // La table demandée n'existe pas dans la table "tablelist"
         return response()->json(['error' => 'La table demandée n\'existe pas.']);
     }
 
     // Récupérer les noms des fichiers à partir de la table "tablelist"
     $controllerName = $tablelist->controller_name ;
     
     $viewName = $tablelist->view_name;
     $modelName = $tablelist->model_name;

    // Supprimer le modèle
    $model_file = app_path('Models/'.$modelName.'.php');
    if (file_exists($model_file)) {
        unlink($model_file);
    }

    // Supprimer le contrôleur
    $controller_file = app_path('Http/Controllers/'.$controllerName.'Controller.php');
    if (file_exists($controller_file)) {
        unlink($controller_file);
    }

    // Supprimer les vues
    $views_directory = resource_path('views/'.$viewName.'.blade.php');
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
