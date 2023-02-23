<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class CreateTableCommand extends Command
{
    protected $signature = 'create:table {table : The name of the table} {--fields= : The fields of the table in the format "name:type, name:type, ..."}';

    protected $description = 'Create a new table with given fields.';

    public function handle()
   
    {
        $table = $this->argument('table');
       
        $fields = $this->option('fields');

        $columns = [];
    
        foreach (explode(',', $fields) as $field) {
            [$name, $type] = explode(':', $field);
            $columns[$name] = $type;
        }
    
        Schema::create($table, function (Blueprint $table) use ($columns) {
            foreach ($columns as $name => $type) {
                $table->$type($name);
            }
        });
    
        $this->info("Table '$table' created successfully with fields: " . implode(', ', array_keys($columns)));
        
        $migrationName = "create_{$table}_table";
        $fileName = date('Y_m_d_His') . '_' . substr(str_replace('.', '', microtime(true)), 0, 6) . '_' . $migrationName . '.php';

        $filePath = database_path('migrations/' . $fileName);
    
        if (!file_exists($filePath)) {
            $stub = file_get_contents(base_path('vendor/laravel/framework/src/Illuminate/Database/Migrations/stubs/migration.stub'));
            $stub = str_replace('{{migrationName}}', $migrationName, $stub);
            $stub = str_replace('{{table}}', $table, $stub);
    
            $migrationColumns = '';
            foreach ($columns as $name => $type) {
                $migrationColumns .= "\$table->$type('$name');\n";
            }
            $stub = str_replace('{{columns}}', $migrationColumns, $stub);
    
            file_put_contents($filePath, $stub);
    
            $this->info("Migration file '$fileName' created successfully.");
        }
    
        Artisan::call('migrate');
    
        $this->info("Migration run successfully.");
    }
    
}
