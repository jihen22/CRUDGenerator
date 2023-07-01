<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Table;
use App\Field as CustomField; // Renommez le modèle Field en CustomField ou un autre nom

class ColonneController extends Controller
{
    public function showColumns($table)
    {
        $user = Auth::user();
        $nameproject = $user->nameproject; 

        $hiddenColumns = ['created_at', 'updated_at', 'remember_token'];

        $columns = Schema::getColumnListing($table);
        $visibleColumns = array_diff($columns, $hiddenColumns);

        return view('colonne', compact('table', 'visibleColumns', 'nameproject'));
    }

    public function deleteColumn($table, $column)
    {
        $tableInfo = Table::where('name', $table)->first();

        // Vérifier si la table existe
        if (!$tableInfo) {
            abort(404);
        }

        // Récupérer le champ à mettre à jour
        $field = CustomField::where('table_id', $tableInfo->id)
            ->where('database_column_name', $column)
            ->first();

        try {
            Schema::table($table, function ($table) use ($column) {
                $table->dropColumn($column);
            });

            // Supprimer la ligne dans la table "fieldslist4"
            if ($field) {
                $field->delete();
            }

            return response()->json(null, 204); // Return an empty response with a 204 status code
        } catch (\Exception $e) {
            return response()->json(['error' => 'Une erreur s\'est produite lors de la suppression de la colonne.'], 500);
        }
    }
}

