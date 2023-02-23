<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Artisan;

class GenerateCrudCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:crud {table : The name of the table} {--model= : The name of the model} {--controller= : The name of the controller}';

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

        $routeName = $this->ask('Enter the name of the route:');

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

        $this->call('make:migration', [
            'name' => "create_{$tableName}_table",
            '--create' => $tableName,
        ]);

        if ($this->confirm('Would you like to add a resource route?')) {
            $this->call('make:resource', [
                'name' => "{$modelName}Resource",
            ]);

            $this->info("Resource route added. You can access it at '/{$routeName}'");
        } else {
            $this->info("No resource route added. You can create your own custom route to access the controller.");
        }

        return Command::SUCCESS;
    }
}
