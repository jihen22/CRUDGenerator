<?php

namespace App\Console\Tablescommands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;

class CreateTable extends Command
{
    protected $signature = 'create:table {table : The name of the table} {--model= : The name of the model} {--controller= : The name of the controller} {--view= : view name}{--fields= : List of fields}';

    protected $description = 'Create a new migration file for a specified table with given fields and generate model and controller.';

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
        ]);
     
        $this->info('Migration, Model and Controller generated successfully!');

        Artisan::call('make:table', [
            'name' =>$this->argument('table') 
        ]);
        
        // Add a route to web.php
    $this->appendRoute("Route::get('/$table', [${table}Controller::class]);"); 
    }

    private function appendRoute($route)
{
    $path = base_path('routes/web.php');
    $contents = file_get_contents($path);

    // Check if route already exists
    if (strpos($contents, $route) === false) {
        // Append the route to the end of the file
        file_put_contents($path, $route . "\n", FILE_APPEND);
    }

    $this->info("Added route: $route");
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
        $columnStatements = array_map(function ($column) {
            $method = "{$column['type']}('{$column['name']}')";
    
            return sprintf("%s%s", str_repeat(' ', 12), "\$table->{$method};");
        }, array_filter($columns, function ($column) {
            return isset($column['name']) && isset($column['type']);
        }));
    
        // Add remember_token column
        $columnStatements[] = sprintf("%s%s", str_repeat(' ', 12), '$table->rememberToken();');
    
        // Add created_at column // Add updated_at column
        $columnStatements[] = sprintf("%s%s", str_repeat(' ', 12), '$table->timestamps();');
    
       
    
        // Add id column as primary key with auto-increment
        $columnStatements[] = sprintf("%s%s", str_repeat(' ', 12), '$table->bigIncrements(\'id\');');
    
        return implode("\n", $columnStatements);
    }
    
    
    
    
}


