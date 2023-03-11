<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;
use App\Field;
use App\Table;


class tablefilesController extends Controller{
    

    public function generateFiles(Request $request)
{ 
    $rules = [
        'table-name' => 'required|string|max:255',
        'model-name' => 'required|string|max:255',
        'controller-name' => 'required|string|max:255',
        'field_type' => 'required|string|max:255',
        'DBCName' => 'required|string|max:255',
        'Validation' => 'required|string|max:255',
        'VisualTitle' => 'required|string|max:255',
        'inlist' => 'required|string|max:255',
        'increate' => 'required|string|max:255',
        'inedit' => 'required|string|max:255',
        'inshow' => 'required|string|max:255',
        'field-max-limit' => 'nullable|integer',
        'field-min-limit' => 'nullable|integer',
        'field-default-value' => 'nullable|string|max:255',
    ];

    $validatedData = $request->validate($rules);

    // Save table name in tables_list table
    $table = Table::create(['name' => $validatedData['table-name']]);

    // Save fields in fields table
    $fieldsData = [
        'table_id' => $table->id,
        'field_type' => $validatedData['field_type'],
        'database_column_name' => $validatedData['DBCName'],
        'validation' => $validatedData['Validation'],
        'visual_title' => $validatedData['VisualTitle'],
        'in_list' => $validatedData['inlist'],
        'in_create' => $validatedData['increate'],
        'in_edit' => $validatedData['inedit'],
        'in_show' => $validatedData['inshow'],
        'max' => $validatedData['field-max-limit'],
        'min' => $validatedData['field-min-limit'],
        'default_value' => $validatedData['field-default-value'],
    ];

    Field::create($fieldsData);

    // Call artisan command to generate files
    $modelName = $validatedData['model-name'] ?? Str::studly($table->name);
    $controllerName = $validatedData['controller-name'] ?? "{$modelName}Controller";
    $fieldsOption = $validatedData['DBCName'] . ',' . $validatedData['field_type'];
  

    $options = [
        'table' => $table->name,
        '--model' => $modelName,
        '--controller' => $controllerName,
        '--fields' => [$fieldsOption],
    ];

    Artisan::call('create:table', $options);

    return redirect('/CRUD')->with('success', 'Files generated successfully!');
}

    
    
    
}

