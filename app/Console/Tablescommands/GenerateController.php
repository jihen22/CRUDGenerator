<?php

namespace App\Console\Tablescommands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class GenerateController extends Command
{
    protected $signature = 'generate:controller {name} {fields?}';

    protected $description = 'Generate a new controller from a stub file';

    public function handle()
    {
        $name = $this->argument('name');
        $modelName = lcfirst($name);
        
        $controllerName = ucfirst($modelName) . "Controller";

       
        $modelNamePlural = Str::plural(lcfirst($modelName)); //products
        $viewFolder = strtolower($modelNamePlural);
        $routePrefix = strtolower($modelNamePlural);

        // Get the fields from the argument and split them into an array
        $fields = $this->argument('fields') ? explode(',', $this->argument('fields')) : [];

        // Generate the field setters for the model
        $fieldSetters = "";
        foreach ($fields as $field) {
            $field = trim($field);
            $fieldSetters .= "\n        $${modelName}->{$field} = \$request->input('$field');";
        }

        $stubPath = resource_path('stubs/Controller.stub');
        $controllerPath = app_path("Http/Controllers/{$controllerName}.php");

        $stubContent = File::get($stubPath);
        $controllerContent = str_replace([
            '{{modelName}}',
            '{{controllerName}}',
            '{{modelNamePlural}}',
            '{{viewFolder}}',
            '{{routePrefix}}',
            '{{fieldSetters}}'
        ], [
            $modelName,
            $controllerName,
            $modelNamePlural,
            $viewFolder,
            $routePrefix,
            $fieldSetters
        ], $stubContent);

        File::put($controllerPath, $controllerContent);

        $this->info("Controller {$controllerName} created successfully.");
    }
}
