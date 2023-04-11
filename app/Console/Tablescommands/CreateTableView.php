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
    protected $signature = 'make:table {name : The name of the table view to create}';

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
        $name = $this->argument('name');

        $file = $this->viewPath($name);

        if ($this->alreadyExists($file)) {
            $this->error('View already exists!');
            return false;
        }

        $stub = $this->getStub();
        $code = str_replace('{{table}}', $stub, file_get_contents($stub));
        File::put($file, $code);

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
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
{
    return base_path('vendor/laravel/framework/src/Illuminate/Database/Migrations/stubs/table.stub');
}

}