<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
        public function up()
        {
            Schema::table('tableslist', function (Blueprint $table) {
                $table->string('model_name')->nullable();
                $table->string('controller_name')->nullable();
                $table->string('view_name')->nullable();
            });
        }
    
        public function down()
        {
            Schema::table('tableslist', function (Blueprint $table) {
                $table->dropColumn('model_name');
                $table->dropColumn('controller_name');
                $table->dropColumn('view_name');
            });
        }
    
};
