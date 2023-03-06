<?php
namespace App\Console\Tablescommands;
use Illuminate\Console\Command;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;

class CreateTable extends Command
{
    protected $signature = 'create:table {table : The name of the table} {fields : The fields of the table in the format "name:type, name:type, ..."} {--model= : The name of the model} {--controller= : The name of the controller}';

    protected $description = 'Create a new migration file for a specified table with given fields and generate model and controller.';
    public function handle()
    {
        $table = $this->argument('table');
        $fields = $this->argument('fields');
        $columns = [];
    
        foreach (explode(',', $fields) as $field) {
            [$name, $type] = explode(':', $field);
            $columns[] = compact('name', 'type');
        }
    
        $stubPath = database_path('stubs/migration.stub');
        $stub = file_get_contents($stubPath);
    
        Artisan::call('make:migration', [
            'name' => "create_{$table}_table",
            '--create' => $table,
            '--path' => 'database/migrations',
        ]);
    
        preg_match('/Migration \[(.+)\] created successfully\./', Artisan::output(), $matches);
        $path = base_path($matches[1]);

    
        $this->replaceMigration($path, $table, $columns, false, $stub);
    
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
    }
    

   
    protected function replaceMigration($path, $table, $columns, $timestamps)
    {
        $content = file_get_contents($path);
        
        $content = str_replace(
            ['{{table}}', '{{columns}}'],
            [$table, $this->buildColumns($columns, $timestamps)],
            $content
        );
       

        file_put_contents($path, $content);
    }

    protected function buildColumns(array $columns, $timestamps = true)
    {
        $columnStatements = array_map(function ($column) {
            $method = "{$column['type']}('{$column['name']}')";

            return sprintf("%s%s", str_repeat(' ', 12), "->{$method}");
        }, $columns);

        if ($timestamps) {
            $columnStatements[] = str_repeat(' ', 12) . '->timestamps()';
        }

        return implode(",\n" . str_repeat(' ', 12), $columnStatements);
    }
}
