<?php

namespace App\Console\Tablescommands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class MakeModelWithColumnsCommand extends Command
{
    protected $signature = 'make:model-with-columns {table : The name of the table}';
    protected $description = 'Create a new model with columns from a table';

    public function handle()
    {
        $table = $this->argument('table');
        $columns = DB::getSchemaBuilder()->getColumnListing($table);

        // Exclude default columns
        $excludeColumns = ['id', 'created_at', 'updated_at', 'remember_token'];
        $fillableColumns = array_diff($columns, $excludeColumns);
        $fillable = implode("', '", $fillableColumns);

        $model = <<<EOT
        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class $table extends Model
        {
            protected \$table = '$table';
            protected \$fillable = ['$fillable'];
        }
        EOT;

        $modelPath = app_path("Models/$table.php");
        file_put_contents($modelPath, $model);

        $this->info("Model for table '$table' created successfully.");
    }
}
