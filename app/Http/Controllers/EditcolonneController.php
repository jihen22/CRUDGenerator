<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Schema\Builder;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\File;

use App\Models\table001;

use App\Table;
use App\Field;


class EditcolonneController extends Controller
{             
   

public function editColumn($table, $column)
{
    $user = Auth::user();
    $nameproject = $user->nameproject; 

    return view('editcolonne', compact('table', 'column'));
}

public function updateColumn(Request $request, $table, $column)
{
    // Valider les données du formulaire
    $validatedData = $request->validate([
        'database_column_name' => 'required',
        'visual_title' => 'required',
        'in_list' => 'required',
        'in_create' => 'required',
        'in_show' => 'required',
        'in_edit' => 'required',
        'max' => 'nullable|numeric',
        'default_value' => 'nullable',
    ]);
     // Convert 'in_list', 'in_create', 'in_show', and 'in_edit' to 1 or 0
     $inList = $validatedData['in_list'] == 'yes' ? 1 : 0;
     $inCreate = $validatedData['in_create'] == 'yes' ? 1 : 0;
     $inShow = $validatedData['in_show'] == 'yes' ? 1 : 0;
     $inEdit = $validatedData['in_edit'] == 'yes' ? 1 : 0;
 

    // Récupérer les informations de la table à partir de TableList
    $tableInfo = Table::where('name', $table)->first();

    // Vérifier si la table existe
    if (!$tableInfo) {
        abort(404);
    }

    // Récupérer le champ à mettre à jour
    $field = Field::where('table_id', $tableInfo->id)
        ->where('database_column_name', $column)
        ->first();

    // Vérifier si le champ existe
    if (!$field) {
        abort(404);
    }

    $newColumnName = $validatedData['database_column_name'];

    // Vérifier si la nouvelle colonne n'existe pas déjà dans la table
    if (!Schema::hasColumn($table, $newColumnName)) {
        // Exécuter la requête ALTER TABLE avec la méthode DB::statement()
        DB::statement("ALTER TABLE `$table` CHANGE `$column` `$newColumnName` VARCHAR(255)");
    
;
    }


    $modelName = $tableInfo->model_name;

         
    $modelFilePath = app_path("{$modelName}.php");
  
    // Vérifier si le fichier du modèle existe
    if (file_exists($modelFilePath)) {
        $modelContent = file_get_contents($modelFilePath);

        // Vérifier si la colonne est déjà ajoutée dans le modèle
        if (strpos($modelContent, "'{$newColumnName}'") !== false) {
            // La colonne est déjà ajoutée dans le modèle, vous pouvez gérer cette situation selon vos besoins
            return;
        }

        // Ajouter la nouvelle colonne comme attribut fillable dans le modèle
        $fillablePattern = "/protected\s+\$fillable\s+=\s+\[[^\]]+\];/i";
        $fillableReplacement = "\$0\n    '{$newColumnName}',";
        $updatedModelContent = preg_replace($fillablePattern, $fillableReplacement, $modelContent);

        // Mettre à jour le fichier du modèle avec le contenu modifié
        file_put_contents($modelFilePath, $updatedModelContent);
    }




  
   // Delete the existing model file if it exists
   $modelPath = app_path("Models/$modelName.php");
   if (File::exists($modelPath)) {
       File::delete($modelPath);
   }

   // Generate the new model file with updated columns
   $this->generateModelFile($table,$modelName);



    // Mettre à jour les valeurs du champ avec les données du formulaire
    $field->database_column_name = $validatedData['database_column_name'];
    $field->visual_title = $validatedData['visual_title'];
    $field->in_list = $inList;
    $field->in_create = $inCreate;
    $field->in_show = $inShow;
    $field->in_edit = $inEdit;
    $field->max = $validatedData['max'];
    $field->default_value = $validatedData['default_value'];

    // Enregistrer les modifications dans la base de données
    $field->save();

    // Redirection vers la page précédente avec un message flash de succès
    return redirect()->back()->with('success', 'Column updated successfully!');
}



  // Helper function to generate the model file with updated columns
  private function generateModelFile($table ,$modelName )
  {
      $columns = DB::getSchemaBuilder()->getColumnListing($table);


      // Exclude default columns
      $excludeColumns = ['id', 'created_at', 'updated_at', 'remember_token'];
      $fillableColumns = array_diff($columns, $excludeColumns);
      $fillable = implode("', '", $fillableColumns);

      $model = <<<EOT
      <?php

      namespace App\Models;

      use Illuminate\Database\Eloquent\Model;

      class $modelName extends Model
      {
          protected \$table = '$table';
          protected \$fillable = ['$fillable'];
      }
      EOT;

      $modelPath = app_path("Models/$modelName.php");
      file_put_contents($modelPath, $model);
  }



}

