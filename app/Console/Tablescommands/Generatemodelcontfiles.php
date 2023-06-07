<?php

namespace App\Console\Tablescommands;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Console\Command;

class Generatemodelcontfiles extends Command
{
    protected $signature = 'generate:crud {table : The name of the table} {--model= : The name of the model} {--controller= : The name of the controller} ';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate Model and controller for a given table';

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
    
    
        // Generate the controller
        $this->call('generate:controller', [
            'name' =>  $controllerName,
            'model'=>$modelName,
        ]);
    
        // Generate the model with columns
        $this->call('make:model', [
            'table' =>$tableName,
            'model'=>$modelName ,
        ]);

        $this->info('Model and controller generated successfully!');

        
    
       
    }
    
}
