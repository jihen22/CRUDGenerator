<?php

namespace App\Console\Tablescommands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;

class CreateTable extends Command
{
    protected $signature = 'create:table {table : The name of the table} {--model= : The name of the model} {--controller= : The name of the controller}{--view= : view name}{--viewType= : view type}{--fields= : List of fields}';

    protected $description = 'Create a new migration file for a specified table with given fields and generate model and controller and view.';

     public function handle()
    {
        $table = $this->argument('table');
      
        $fields = explode(',', $this->option('fields'));
    
        $stubPath = database_path('stubs/migration.stub');
        $stub = file_get_contents($stubPath);
    
        $migrationName = "create_{$table}_table";
        Artisan::call('make:migration', [
            'name' => $migrationName,
            '--create' => $table,
            '--path' => 'database/migrations',
        ]);
    
        $migrationFileName = $this->getMigrationFileName($migrationName);
        $migrationFilePath = database_path('migrations') . DIRECTORY_SEPARATOR . $migrationFileName;
    
    // Check if the migration file exists
    if (!file_exists($migrationFilePath)) {
        $this->error('Failed to generate migration file');
        return;
    }

 
        $this->replaceMigration($migrationFilePath, $table, $fields, true, $stub);
    
        Artisan::call('migrate', [
            '--force' => true,
        ]);
      
    
        // Call GenerateModelContFiles command to generate model and controller
        Artisan::call('generate:crud', [
            'table' => $table,
            '--model' => $this->option('model'),
            '--controller' => $this->option('controller'),
            '--viewType' => $this->option('viewType'),
        ]);
     
        $this->info('Migration, Model and Controller generated successfully!');
        
        Artisan::call('create:routes', [
            'table' => $table,
            '--viewType' =>$this->option('viewType'),
            '--controller' => $this->option('controller'),
      
        ]);

       

        Artisan::call('make:view', [
            'view' => $this->option('view'),
            '--viewType' => $this->option('viewType'),
            '--controller' => $this->option('controller'),
        ]);
        
       
        
    }
   
    
    protected function getMigrationFileName($migrationName)
    {
        $timestamp = date('Y_m_d_His');
        return "{$timestamp}_{$migrationName}.php";
    }
 

    protected function replaceMigration($path, $table, $fields, $timestamps, $stub)
    {
        // parse fields into columns array
        $columnsArr = explode(',', implode(',', $fields));
        $columns = array();
        for ($i = 0; $i < count($columnsArr); $i += 2) {
            $name = trim($columnsArr[$i]);
            $type = trim($columnsArr[$i+1]);
            $columns[] = [
                'name' => $name,
                'type' => $type,
            ];
        }
    
        // replace placeholders in the stub with actual values
        $content = str_replace(
            ['{{table}}', '{{columns}}', '{{timestamps}}'],
            [$table, $this->buildColumns($columns), $timestamps ? 'true' : 'false'],
            $stub
        );
      
    
    
        // read existing migration file contents
        $file_contents = file_get_contents($path);
      
        if ($file_contents === false) {
            throw new \Exception('Failed to read migration file: '.$path);
        }
    
        // write the modified contents back to the migration file
        $result = file_put_contents($path, $content);

        if ($result === false) {
            throw new \Exception('Failed to write migration file: '.$path);
        }
    
        // return the path to the migration file
        return $path;
    }
    protected function buildColumns(array $columns)
    {
        $tableColumns = '';
    
        foreach ($columns as $column) {
            $name = $column['name'];
            $type = $column['type'];
    
            $field = \DB::table('fieldslist4')->where('database_column_name', $name)->first();
    
            if ($field) {
                $columnStatement = $this->buildColumnStatement($field, $name, $type);
                $tableColumns .= str_repeat(' ', 12) . '$table->' . $columnStatement . ";\n";
            } else {
                $method = "{$type}('{$name}')";
                $tableColumns .= sprintf("%s%s", str_repeat(' ', 12), '$table->' . $method . ";\n");
            }
        }
    
        // Add id column
        $tableColumns .= sprintf("%s%s", str_repeat(' ', 12), '$table->id();') . "\n";
    
        // Add remember_token column
        $tableColumns .= sprintf("%s%s", str_repeat(' ', 12), '$table->rememberToken();') . "\n";
    
        // Add created_at and updated_at columns
        $tableColumns .= sprintf("%s%s", str_repeat(' ', 12), '$table->timestamps();') . "\n";
    
        return $tableColumns;
    }
    
    
    protected function buildColumnStatement($field, $name, $type)
    {
        $method = "{$type}('{$name}')";
    
        if ($field->nullable) {
            $method .= '->nullable()';
        }
    
        if ($field->validation === 'Optional') {
            $method .= '->optional()';
        } elseif ($field->validation === 'Required/Unique') {
            $method .= '->unique()';
        } elseif ($field->validation === 'Required') {
            $method .= '->required()';
        }
    
        if ($field->validationRules) {
            $method .= "->validate(['{$field->validationRules}'])";
        }
    
        if ($field->default_value) {
            $method .= "->default('{$field->default_value}')";
        }
    
        // Add length if it exists
        if ($field->max) {
            $method .= "->length({$field->max})";
        }
    
        // Add any additional field definitions you have in the "fieldslist" table
    
        return $method;
    }
    
    
    
    
    protected function setPrimaryKey()
    {
        return sprintf("%s%s", str_repeat(' ', 12), '$table->primary(\'id\');');
    }
    
    
    
}