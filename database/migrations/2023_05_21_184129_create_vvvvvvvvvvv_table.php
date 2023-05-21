<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<<< HEAD:database/migrations/2023_05_21_092528_create_table08_table.php
        Schema::create('table08', function (Blueprint $table) {
                        $table->string('colonne08');
========
        Schema::create('vvvvvvvvvvv', function (Blueprint $table) {
>>>>>>>> 13ef0821c983edd82bb45445da02b5202ce4446a:database/migrations/2023_05_21_184129_create_vvvvvvvvvvv_table.php
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
<<<<<<<< HEAD:database/migrations/2023_05_21_092528_create_table08_table.php
        Schema::dropIfExists('table08');
========
        Schema::dropIfExists('vvvvvvvvvvv');
>>>>>>>> 13ef0821c983edd82bb45445da02b5202ce4446a:database/migrations/2023_05_21_184129_create_vvvvvvvvvvv_table.php
    }
};
