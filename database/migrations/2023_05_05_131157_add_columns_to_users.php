<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
        public function up()
        {
            Schema::table('users', function (Blueprint $table) {
                $table->string('username')->unique();
           
                $table->string('nameproject');
               $table->string('password');
               $table->string('language');
               $table->string('date_format');
               $table->string('laravel_version');
               
            });
        }
    
        public function down()
        {
            Schema::table('tableslist', function (Blueprint $table) {
                $table->string('username')->unique();
               
               $table->string('nameproject');
              $table->string('password');
              $table->string('language');
              $table->string('date_format');
              $table->string('laravel_version');
            });
        }
    
};
