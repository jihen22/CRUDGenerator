<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;

class CrudController extends Controller
{
    public function generateCrud(Request $request)
    {
        $validatedData = $request->validate([
            'table_name' => 'required|string|max:255',
            'field_list' => 'required|string',
            'model_name' => 'nullable|string|max:255',
            'controller_name' => 'nullable|string|max:255',
            'use_soft_deletes' => 'nullable|boolean',
        ]);
    
        $tableName = $validatedData['table_name'];
        $fieldList = $validatedData['field_list'];
        $useSoftDeletes = $validatedData['use_soft_deletes'];
    
        $modelName = $validatedData['model_name'] ?? Str::studly($tableName);
        $controllerName = $validatedData['controller_name'] ?? "{$modelName}Controller";
    
        $options = [
            'table' => $tableName,
            '--model' => $modelName,
            '--controller' => $controllerName,
        ];
        
        if ($useSoftDeletes) {
            $options['--soft-deletes'] = true;
        }
        
        Artisan::call('generate:crud', $options);
        
    
        return view('crud-generated');
    }
    
}
