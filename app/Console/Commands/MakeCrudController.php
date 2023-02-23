<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;


class MakeCrudController extends Command
{
      /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:crud {table : The name of the table} {--model : The name of the model}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new CRUD controller';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $table = $this->argument('table');
        $controllerName = Str::studly(Str::singular($table)) . 'Controller';
        $namespace = 'App\Http\Controllers';
        if ($model = $this->option('model')) {
            $modelName = Str::studly($model);
        } else {
            $modelName = Str::studly(Str::singular($table));
        }
        
    $controllerPath = app_path("Http/Controllers/{$controllerName}.php");

    if (File::exists($controllerPath)) {
        $this->error("Le contrôleur {$controllerName} existe déjà.");
        return;
    }

    $stub = File::get(base_path('stubs/controller.stub'));

    $stub = str_replace('{{namespace}}', $namespace, $stub);
    $stub = str_replace('{{controllerName}}', $controllerName, $stub);
    $stub = str_replace('{{modelName}}', $modelName, $stub);
    $stub = str_replace('{{table}}', $table, $stub);

    File::put($controllerPath, $stub);

    $this->info("Le contrôleur {$controllerName} a été créé avec succès.");

    $this->info('Le contrôleur ' . $controllerName . ' a été créé avec succès !');

}

    }

