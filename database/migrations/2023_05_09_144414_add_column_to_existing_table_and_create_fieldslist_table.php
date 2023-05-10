<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use App\Models\tableslist;
use App\Models\fieldslist4;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Récupérer les informations saisies par l'utilisateur
        $tableName = readline("Entrez le nom de la table existante: ");
        $fieldType = readline("Entrez le type de données de la nouvelle colonne: ");
        $databaseColumnName = readline("Entrez le nom de la nouvelle colonne: ");
        $validation = readline("Entrez les règles de validation de la nouvelle colonne: ");
        $visualTitle = readline("Entrez le titre visuel de la nouvelle colonne: ");
        $inList = readline("La nouvelle colonne doit-elle apparaître dans la liste: ");
        $inCreate = readline("La nouvelle colonne doit-elle apparaître dans le formulaire de création: ");
        $inShow = readline("La nouvelle colonne doit-elle apparaître dans la page de détails: ");
        $inEdit = readline("La nouvelle colonne doit-elle être éditable: ");
        $max = readline("Entrez la valeur max ");

        $min = readline("Entrez la valeur ");


        $defaultValue = readline("Entrez la valeur par défaut de la nouvelle colonne: ");

        // Vérifier si la table existe
        if (Schema::hasTable($tableName)) {
            Schema::table($tableName, function (Blueprint $table) use ($fieldType, $databaseColumnName, $validation, $visualTitle, $inList, $inCreate, $inShow,$inEdit,$max,$min, $defaultValue, $tableName) {
                // Ajouter la nouvelle colonne à la table
                $table->$fieldType($databaseColumnName)->default($defaultValue);
                
                // Mettre à jour les métadonnées de la colonne dans la table 'columns'
                $columnsTable = 'fieldslist4';
                $columnMetadata = [
                    'table_id' => tableslist::where('name', $tableName)->first()->id,
                    'field_type' => $fieldType,
                    'database_column_name' => $databaseColumnName,
                    'validation' => $validation,
                    'visual_title' => $visualTitle,
                    'in_list' => $inList,
                    'in_create' => $inCreate,
                    'in_show' => $inShow,
                    'in_edit'=>$inEdit,
                    'max'=>$max,
                    'min'=>$min,
                
                    'default_value' => $defaultValue,
                ];
                DB::table($columnsTable)->insert($columnMetadata);
            });
        } else {
            echo "La table $tableName n'existe pas.";
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Supprimer la colonne ajoutée dans la méthode up()
        $tableName = readline("Entrez le nom de la table existante: ");
        $columnName = readline("Entrez le nom de la colonne à supprimer: ");
        Schema::table($tableName, function (Blueprint $table) use ($columnName) {
            $table->dropColumn($columnName);
        });
        
        // Supprimer les métadonnées de la colonne dans la table 'columns'
        $columnsTable = 'fieldslist4';
        DB::table($columnsTable)->where('database_column_name', $columnName)->delete();
    }
};
