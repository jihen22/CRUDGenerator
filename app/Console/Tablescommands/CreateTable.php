<?php

namespace App\Console\Tablescommands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;

class CreateTable extends Command
{
    protected $signature = 'create:table {table : The name of the table} {--model= : The name of the model} {--controller= : The name of the controller} {--fields= : List of fields}';

    protected $description = 'Create a new migration file for a specified table with given fields and generate model and controller.';

    protected function buildColumns(array $columns)
    {
        $columnStatements = array_map(function ($column) {
            $method = "{$column['type']}('{$column['name']}')";

            return sprintf("%s%s", str_repeat(' ', 12), "\$table->{$method};");
        }, array_filter($columns, function ($column) {
            return isset($column['name']) && isset($column['type']);
    }));

        return implode("\n", $columnStatements);
    }

    protected function replaceMigration($path, $table, $fields, $timestamps, $stub)
    {
      
        $columnsArr = explode(',', implode(',', $fields));
    
        for ($i = 0; $i < count($columnsArr); $i+=2) {
            $name = trim($columnsArr[$i]);
            $type = trim($columnsArr[$i+1]);
    
            $columns[] = [
                'name' => $name,
                'type' => $type,
            ];
        }
    
        $content = str_replace(
            ['{{table}}', '{{columns}}', '{{timestamps}}'],
            [$table, $this->buildColumns($columns), $timestamps ? 'true' : 'false'],
            $stub
        );
    
    
        $path = str_replace('/', '\\', $path);

        file_put_contents($path, $content);
       

    
        
        preg_match('/Migration created successfully\!\n\s+.*\n/m', Artisan::output(), $matches);
    
        if (!empty($matches)) {
            $path = base_path(trim(str_replace('Migration created successfully!', '', str_replace('/', '\\', $matches[0]))));
            var_dump($path);
            if (file_exists($path)) {
                return $path;
            }
        }
    
        throw new \Exception('Could not determine migration file path.');
    }

    public function handle()
    {
        $table = $this->argument('table');
        $fields = explode(',', $this->option('fields'));

        $stubPath = database_path('stubs/migration.stub');
        $stub = file_get_contents($stubPath);

        Artisan::call('make:migration', [
            'name' => "create_{$table}_table",
            '--create' => $table,
            '--path' => 'database/migrations',
        ]);

        preg_match('/Migration \[(.+)\] created successfully\./', Artisan::output(), $matches);


        $path = base_path(trim($matches[1]));
        $path = str_replace('/', '\\', $matches[1]);
        //dd($path);

        $this->replaceMigration($path, $table, $fields, true, $stub);

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


        Artisan::call('create:view', [
            'name' => 'nom_de_votre_vue', 
            '--table' => 'nom_de_votre_table', 
        ]);
    }
    }


