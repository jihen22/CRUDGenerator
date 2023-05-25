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

public function checkTableExists(Request $request)
{
    $tableName = $request->input('tableName');

    $exists = Schema::hasTable($tableName);

    return response()->json(['exists' => $exists]);
}

       
    }

