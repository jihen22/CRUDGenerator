<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Table;
use App\Field;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;




use Illuminate\Support\Facades\File;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\View;






class editTableController extends Controller
{
    
    public function add(Request $request)
    {
        // Récupérer les données du formulaire
        $tableName = $request->input('table_name');
        $fieldType = $request->input('field_type');
        $databaseColumnName = $request->input('database_column_name');
        $validation = "test";
        $visualTitle = $request->input('visual_title');
        $inList = $request->input('in_list') ? 1 : 0;
        $inCreate = $request->input('in_create') ? 1 : 0;
        $inShow = $request->input('in_show') ? 1 : 0;
        $inEdit = $request->input('in_edit') ? 1 : 0;
        $max = $request->input('max');
        $min = $request->input('min');
     
        $defaultValue = $request->input('default_value');



// Vérifier si la table existe
if (Schema::hasTable($tableName)) {
    Schema::table($tableName, function (Blueprint $table) use ($fieldType, $databaseColumnName) {
        // Ajouter la nouvelle colonne à la table avec la valeur par défaut NULL
        $table->$fieldType($databaseColumnName)->nullable()->default(null);
    });

      // Mettre à jour le modèle correspondant
      $modelClassName = (Str::camel($tableName)); // Remplacez camel_case par Str::camel si vous utilisez Laravel 6 ou supérieur
      $modelFilePath = app_path("{$modelClassName}.php");
  
      // Vérifier si le fichier du modèle existe
      if (file_exists($modelFilePath)) {
          $modelContent = file_get_contents($modelFilePath);
  
          // Vérifier si la colonne est déjà ajoutée dans le modèle
          if (strpos($modelContent, "'{$databaseColumnName}'") !== false) {
              // La colonne est déjà ajoutée dans le modèle, vous pouvez gérer cette situation selon vos besoins
              return;
          }
  
          // Ajouter la nouvelle colonne comme attribut fillable dans le modèle
          $fillablePattern = "/protected\s+\$fillable\s+=\s+\[[^\]]+\];/i";
          $fillableReplacement = "\$0\n    '{$databaseColumnName}',";
          $updatedModelContent = preg_replace($fillablePattern, $fillableReplacement, $modelContent);
  
          // Mettre à jour le fichier du modèle avec le contenu modifié
          file_put_contents($modelFilePath, $updatedModelContent);
      }
  



    
     // Delete the existing model file if it exists
     $modelPath = app_path("Models/$tableName.php");
     if (File::exists($modelPath)) {
         File::delete($modelPath);
     }

     // Generate the new model file with updated columns
     $this->generateModelFile($tableName);






            // Obtenir l'ID de la table à partir de la table 'tableslist'
            $tableId = Table::where('name', $tableName)->first()->id;

            // Mettre à jour les métadonnées de la colonne dans la table 'fieldslist4'
            $columnsTable = 'fieldslist4';
            $columnMetadata = [
                'table_id' => $tableId,
                'field_type' => $fieldType,
                'database_column_name' => $databaseColumnName,
                'validation' => $validation,
                'visual_title' => $visualTitle,
                'in_list' => $inList,
                'in_create' => $inCreate,
                'in_show' => $inShow,
                'in_edit' => $inEdit,
                'max' => $max,
                'min' => $min ,
                'default_value' => $defaultValue,
                
            ];
          
               
            DB::table($columnsTable)->insert($columnMetadata);
            return redirect()->back()->with('success', 'La colonne a été ajoutée avec succès.');
        } else {
            return redirect()->back()->with('error', "La table $tableName n'existe pas.");
        }
    }
    
    // Helper function to generate the model file with updated columns
    private function generateModelFile($tableName)
    {
        $columns = DB::getSchemaBuilder()->getColumnListing($tableName);


        // Exclude default columns
        $excludeColumns = ['id', 'created_at', 'updated_at', 'remember_token'];
        $fillableColumns = array_diff($columns, $excludeColumns);
        $fillable = implode("', '", $fillableColumns);

        $model = <<<EOT
        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class $tableName extends Model
        {
            protected \$table = '$tableName';
            protected \$fillable = ['$fillable'];
        }
        EOT;

        $modelPath = app_path("Models/$tableName.php");
        file_put_contents($modelPath, $model);
    }


    
public function showAddColumnForm()
{
    return View::make('edittable');
} 


}





