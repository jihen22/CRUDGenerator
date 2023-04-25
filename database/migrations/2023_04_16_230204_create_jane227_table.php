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
<<<<<<<< HEAD:database/migrations/2023_04_23_172202_create_table1_table.php
        Schema::create('table1', function (Blueprint $table) {
                        $table->double('col1');
========
        Schema::create('jane227', function (Blueprint $table) {
            $table->id();
            $table->string('jane69');
>>>>>>>> 4a8b2689f99360825dcb8174684648bda4f38714:database/migrations/2023_04_16_230204_create_jane227_table.php
            $table->rememberToken();
            $table->timestamps();
            $table->bigIncrements('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
<<<<<<<< HEAD:database/migrations/2023_04_23_172202_create_table1_table.php
        Schema::dropIfExists('table1');
========
        Schema::dropIfExists('jane227');
>>>>>>>> 4a8b2689f99360825dcb8174684648bda4f38714:database/migrations/2023_04_16_230204_create_jane227_table.php
    }
};

