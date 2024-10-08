<?php

namespace App\Console\Tablescommands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class CreateTableView extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:view {view : The name of the table view to create} {--viewType= : The type of the table view to create} {--controller= : The name of the controller}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new table view';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = $this->argument('view');
        $viewType = $this->option('viewType');
        $controllerName = $this->option('controller');
    
        // ...
    
        $file = $this->viewPath($name);
    
        if ($this->alreadyExists($file)) {
            $this->error('View already exists!');
            return false;
        }
    
        $stub = $this->getStub($viewType);
        $code = file_get_contents($stub);
    
        // Remplacer les variables dans la stub
        $code = str_replace('{{table}}', $stub, $code);
        $controllerContent = str_replace('{{controllerName}}', $controllerName, $code);
        File::put($file, $controllerContent);
    
        $this->info('View created successfully.');
    }
      



    /**
     * Get the path to the view file.
     *
     * @param  string  $name
     * @return string
     */
    protected function viewPath($name)
    {
        return resource_path('views/' . $name . '.blade.php');
    }

    /**
     * Determine if the file already exists.
     *
     * @param  string  $path
     * @return bool
     */
    protected function alreadyExists($path)
    {
        return File::exists($path);
    }

    /**
     * Get the stub file for the generator based on the viewType.
     *
     * @param  string  $viewType
     * @return string
     */
    protected function getStub($viewType)
    {
        switch ($viewType) {
            case 'card':
                return resource_path('stubs/card.stub');
              
            case 'list':
                return resource_path('stubs/list.stub');
            default:
                return resource_path('stubs/table.stub');
        }
    }
}