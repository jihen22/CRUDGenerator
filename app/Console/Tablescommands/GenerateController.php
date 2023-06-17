<?php

namespace App\Console\Tablescommands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class GenerateController extends Command
{
    protected $signature = 'generate:controller {name} {model} {--viewType : The type of the table view to create}';

    protected $description = 'Generate a new controller from a stub file';

    public function handle()
    {
        $controllerName = $this->argument('name') . "Controller";
        $modelName = $this->argument('model');
        $viewType = $this->option('viewType');

        // Determine the stub file based on the viewType
        if ($viewType === 'list') {
            $stubFileName = 'listcontroller.stub';
        } elseif ($viewType === 'table' || $viewType === 'card') {
            $stubFileName = 'tablecardcontroller.stub';
        } else {
            $this->error("Invalid viewType. Please specify 'list', 'table', or 'card'.");
            return;
        }

        $stubPath = resource_path("stubs/{$stubFileName}");
        $controllerPath = app_path("Http/Controllers/{$controllerName}.php");

        if (!File::exists($stubPath)) {
            $this->error("Stub file '{$stubFileName}' does not exist.");
            return;
        }

        $stubContent = File::get($stubPath);
        $controllerContent = str_replace(['{{modelName}}', '{{controllerName}}'], [$modelName, $controllerName], $stubContent);

        File::put($controllerPath, $controllerContent);

        $this->info("Controller '{$controllerName}' created successfully.");
    }
}