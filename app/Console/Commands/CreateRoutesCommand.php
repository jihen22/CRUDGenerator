<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;

class CreateRoutesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:routes {table : Table name} {--controller= : Controller name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create routes for the specified table.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $table = $this->argument('table');
        $controller = $this->option('controller') ?: ucfirst($table).'Controller';
        
        $controller_path = app_path('Http/Controllers/'.$controller.'.php');
        if (!File::exists($controller_path)) {
            $this->error('Controller '.$controller.' does not exist!');
            return;
        }

        $model = $table;
        $model_path = app_path('Models/'.$model.'.php');
        if (!File::exists($model_path)) {
            $this->error('Model '.$model.' does not exist!');
            return;
        }

        $routeDefinition = "Route::resource('/table/{table}/{view}', '\\\\App\\\\Http\\\\Controllers\\\\{$controller}');";
        File::append(base_path('routes/web.php'), $routeDefinition);
        $this->info('Routes for '.$table.' table created successfully.');
        

    }

    
    
}