<?php

namespace App\Console\Tablescommands;

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
    protected $signature = 'create:routes {table : Table name} {--controller= : Controller name} {--viewType= : View type}';

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
        $controller = $this->option('controller');
        $viewType = $this->option('viewType');
        $controller_path = app_path('Http/Controllers/'.$controller.'Controller.php');

        if (!File::exists($controller_path)) {
            $this->error('Controller '.$controller.' does not exist!');
            return;
        }

        $useStatement = "use App\\Http\\Controllers\\{$controller}Controller;\n";

        $routeDefinitions = [];

        if ($viewType === 'card' || $viewType === 'table') {
            $routeDefinitions[] = "Route::get('/{$controller}/{table}/{view}', [{$controller}Controller::class, 'index']);";
            $routeDefinitions[] = "Route::delete('/{$controller}/{id}', [{$controller}Controller::class, 'deleteData']);";
            $routeDefinitions[] = "Route::post('/{$controller}/{id}', [{$controller}Controller::class, 'updateRow'])->name('update.row');";
            $routeDefinitions[] = "Route::post('/{$controller}/{table}/{view}', [{$controller}Controller::class, 'store']);";
        } else {
            $routeDefinitions[] = "Route::get('/{$table}list/{table}/{view}', [{$controller}Controller::class, 'show']);";
        }

        $webRouteFile = base_path('routes/web.php');
        $webRouteContents = file_get_contents($webRouteFile);

        // check if use statement already exists in the file
        if (strpos($webRouteContents, $useStatement) === false) {
            // append the use statement to the top of the file
            file_put_contents($webRouteFile, $useStatement, FILE_APPEND | LOCK_EX);
        }

        // append the route definitions to the end of the file
        foreach ($routeDefinitions as $routeDefinition) {
            file_put_contents($webRouteFile, "\n".$routeDefinition, FILE_APPEND | LOCK_EX);
        }

        $this->info('Routes for '.$table.' table created successfully.');
    }
}