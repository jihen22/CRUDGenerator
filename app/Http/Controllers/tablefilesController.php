<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;
use App\Models\Table;
use App\Models\field;

class tablefilesController extends Controller
{
    public function generateFiles(Request $request)
    {
        $validatedData = $request->validate([
            'table-name' => 'required|string|max:255',
            'field-list' => 'required|string', 
            'model-name' => 'nullable|string|max:255',
            'controller-name' => 'nullable|string|max:255'
        ]);

        // Save table name in tables_list table
        $table = new Table();
        $table->name = $validatedData['table-name'];
        $table->save();

        // Save fields in fields_list table
        $fields = explode(',', $validatedData['field-list']);
        
 
        foreach ($fields as $field) {

            // Parse the field data into an array
            $field = json_decode($fieldData, true);
            
            $newField = new field();
            $newField->table_id = $table->id;
            $newField->field_type = $field['type'];
            $newField->database_column_name = $field['name'];
            $newField->visual_title = $field['title'];
            $newField->in_list = $field['inList'];
            $newField->in_create = $field['inCreate'];
            $newField->in_show = $field['inShow'];
            $newField->in_edit = $field['inEdit'];
            $newField->required = $field['required'];
            $newField->max = $field['max'] ?? null;
            $newField->min = $field['min'] ?? null;
            $newField->default_value = $field['default'] ?? null;
            $newField->edit = $field['edit'] ?? true;
            $newField->delete = $field['delete'] ?? true;
            $newField->save();
        }

        // Call artisan command to generate files
        $modelName = $validatedData['model-name'] ?? Str::studly($table->name);
        $controllerName = $validatedData['controller-name'] ?? "{$modelName}Controller";
        $options = [
            'table' => $table->name,
            'fields' => $validatedData['field-list'], 
            '--model' => $modelName,
            '--controller' => $controllerName,
        ];
        Artisan::call('create:table', $options);

        return view('crud-generated');
    }
    
    
}
