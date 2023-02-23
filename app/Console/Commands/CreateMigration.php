<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class CreateMigration extends Command
{
    protected $signature = 'custom:migration {table : The name of the table} {fields : The fields of the table in the format "name:type, name:type, ..."}';

    protected $description = 'Create a new migration file for a specified table with given fields.';

    public function handle()
    {
        $table = $this->argument('table');
        $fields = $this->argument('fields');
        $columns = [];

        foreach (explode(',', $fields) as $field) {
            [$name, $type] = explode(':', $field);
            $columns[] = compact('name', 'type');
        }

        Artisan::call('make:migration', [
            'name' => "create_{$table}_table",
            '--create' => $table,
        ]);

        preg_match('/Migration \[(.+)\] created successfully\./', Artisan::output(), $matches);
        $path = $matches[1];
        //dd($filename)  ;
        //$path = database_path('migrations' . trim($filename) . '.php');
        
        $this->replaceMigration($path, $table, $columns);

        //$this->info('Migration created successfully.');
    }
    protected function replaceMigration($path, $table, $columns)
    {
        $content = file_get_contents($path);
    //dd($content);
        // extract migration file name from Artisan output
        //preg_match('/Migration \[(.+)\] created successfully\./', Artisan::output(), $matches);
        //$filename = $matches[1];
    
        $content = str_replace(
            ['{{table}}', '$table->id();
            $table->timestamps();'],
            [$table, $this->buildColumns($columns)],
            $content
        );
    dd($content);
        // update file_put_contents to use the correct filename
        file_put_contents($path, $content);
    }
    
    protected function buildColumns(array $columns)
    {
        return implode(",\n" . str_repeat(' ', 12), array_map(function ($column) {
            extract($column);
            $method = "{$type}('$name')";
            return sprintf("%s%s", str_repeat(' ', 12), "->{$method}");
        }, $columns));
    }
}

