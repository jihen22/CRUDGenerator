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
    DB::statement('DROP TABLE '.$table);
    return redirect()->back()->with('success', 'Table supprimée avec succès.');
}



    
}
