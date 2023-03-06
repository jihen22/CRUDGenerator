<?php

namespace App\Console\Tablescommands;

use Illuminate\Console\Command;

class Generatemodelcontfiles extends Command
{
    protected $signature = 'generate:crud {table : The name of the table} {--model= : The name of the model} {--controller= : The name of the controller} ';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate CRUD operations for a given table';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $tableName = $this->argument('table');
        $modelName = $this->option('model') ?: ucfirst(camel_case($tableName));
        $controllerName = $this->option('controller') ?: ucfirst(camel_case($tableName)) . 'Controller';

        $this->call('make:model', [
            'name' => $modelName,
            '--migration' => true,
            '--controller' => true,
        ]);

        $this->call('make:controller', [
            'name' => $controllerName,
            '--resource' => true,
            '--model' => $modelName,
        ]);

       

        $this->info('CRUD generated successfully!');
    }
}
