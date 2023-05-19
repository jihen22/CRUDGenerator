<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
        public function up()
        {
            Schema::table('tableslist', function (Blueprint $table) {
                
                $table->string('view_type')->nullable();
            });
        }
    
        public function down()
        {
            Schema::table('tableslist', function (Blueprint $table) {
                $table->dropColumn('view_type');
           
            });
        }
    
};
