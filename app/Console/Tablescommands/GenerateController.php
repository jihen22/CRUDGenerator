<?php

namespace App\Console\Tablescommands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class GenerateController  extends Command
{
    protected $signature = 'generate:controller {name}';

    protected $description = 'Generate a new controller from a stub file';

    public function handle()
    {
        $name = $this->argument('name');
        $stubPath = resource_path('stubs/Controller.stub');
        $controllerPath = app_path("Http/Controllers/{$name}Controller.php");

        $stubContent = File::get($stubPath);
        $controllerContent = str_replace('{{ class }}', "{$name}Controller", $stubContent);

        File::put($controllerPath, $controllerContent);

        $this->info("Controller {$name}Controller created successfully.");
    }
}