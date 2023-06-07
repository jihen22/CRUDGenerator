<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;
use App\Field;
use App\Table;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;




class tablefilesController extends Controller{

    public function ProjectName()
    {
        $user = Auth::user();
        $nameproject = $user->nameproject;
 
        return view('Menus.Create.CRUD')->with('nameproject', $nameproject);
    }
    
    public function generateFiles(Request $request)

{ 

     if (true) {
        $validator = Validator::make($request->all(), [
            'tableName' => 'required|max:255',
            'tableModel' => 'required|max:255',
            'viewType' => 'required|max:255',
            'tableController' => 'required|max:255',
            'tableView' => 'required|max:255',
            'fields' => 'required|array|min:1',
            'fields.*.DBCName' => 'required|max:255',
            'fields.*.field_type' => 'required',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }
    
        $tableName = $request->input('tableName');
        $modelName = $request->input('tableModel');
        $viewName = $request->input('tableView');
        $controllerName = $request->input('tableController');
        $fields = $request->input('fields');
        $viewType = $request->input('viewType');
        $entriesPerPage= $request->input('entriesPerPage');
        $orderBy = $request->input('orderBy');
        $orderdirection = $request->input('orderdirection');
   


    
        // Save table name, model name, and controller name in tableslist table
        $table = Table::create([
            'name' => $tableName,
            'model_name' => $modelName,
            'controller_name' => $controllerName, 
            'view_name' => $viewName,
            'view_type' => $viewType,
            'entriesPerPage' => $entriesPerPage,
            'orderBy' => $orderBy,
            'orderdirection' => $orderdirection,
        ]);
    
            //Save fields in fields table
                $fieldsData = [];
                foreach ($fields as $field) {
                    $fieldsData[] = [
                        'table_id' => $table->id,
                        'field_type' => $field['field_type'],
                        'database_column_name' => $field['DBCName'],
                        'validation' => $field['validation'],
                        'visual_title' => $field['visualTitle'],
                        'in_list' => $field['inList'],
                        'in_create' => $field['inCreate'],
                        'in_edit' => $field['inEdit'],
                        'in_show' => $field['inShow'],
                        'max' => $field['maxLimit'],
                        'min' => $field['minLimit'],
                        'default_value' => $field['defaultValue'],
                        'indexing' => $field['indexing'],
                        'nullable' => $field['nullable'],
                        'validationRules' => $field['validationRules'],
                        'unique' => $field['unique'],
                    ];
                }
        
                Field::insert($fieldsData);
        
              
                $fieldsOption = [];
                foreach ($fields as $field) {
                    $fieldsOption[] = $field['DBCName'] . ',' . $field['field_type'];
                }
          
               
                
        
                $options = [
                    'table' => $table->name,
                    '--model' => $modelName,
                    '--controller' => $controllerName,
                    '--view'=>$viewName ,
                    '--viewType'=>$viewType ,
                    '--fields' => implode(',', $fieldsOption),
                ];
              Artisan::call('create:table', $options);
        
                return response()->json(['success' => true]);
            }
        
            return response()->json(['success' => false]);
        }

        public function showTable($id)
{
    $table = Table::find($id);
    $fields = Field::where('table_id', $id)->get();
    
    return view('edittable')->with('table', $table)->with('fields', $fields);
}


public function checkColumn(Request $request)
{
    // Retrieve the table name and column name from the request
    $tableName = $request->input('table_name');
    $columnName = $request->input('column_name');

    // Perform the logic to check if the column exists in the table
    // You can use your preferred database query builder or ORM to perform the check

    // Example logic using Laravel's Schema Builder
    $tableExists = \Schema::hasColumn($tableName, $columnName);

    // Return a JSON response indicating whether the column exists or not
    return response()->json([
        'exists' => $tableExists
    ]);
}




public function checkEntitiesExist(Request $request)
{
    $tableName = $request->input('tableName');
    $controllerName = $request->input('controllerName');
    
    $modelName = $request->input('modelName');
    $viewName = $request->input('viewName');

    // Check if table exists
    $tableExists = Schema::hasTable($tableName);
    
  // Check if controller file exists
  $controllerExists = File::exists(app_path('Http/Controllers/' . $controllerName . 'Controller.php'));

  // Check if model file exists

  $modelExists = File::exists(app_path('Models/'.$modelName . '.php'));


 
// Construct the view path

$viewPath = base_path('resources/views/' . str_replace('.', '/', $viewName) . '.blade.php');

// Check if the view exists
$viewExists = file_exists($viewPath);

  

    // Return the response
    return response()->json([
        'tableExists' => $tableExists,
        'controllerExists' => $controllerExists,
        'modelExists' => $modelExists,
        'viewExists' => $viewExists,
    ]);
}



       
    }

