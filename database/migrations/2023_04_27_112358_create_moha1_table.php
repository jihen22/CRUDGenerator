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
<<<<<<<< HEAD:database/migrations/2023_04_28_095014_create_table1447_table.php
        Schema::create('table1447', function (Blueprint $table) {
                        $table->string('col55');
========
        Schema::create('moha1', function (Blueprint $table) {
                        $table->string('colonne5');
>>>>>>>> 147d842cd0bfe9111b13334e28c18a22615541f7:database/migrations/2023_04_27_112358_create_moha1_table.php
            $table->id();
            $table->rememberToken();
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
<<<<<<<< HEAD:database/migrations/2023_04_28_095014_create_table1447_table.php
        Schema::dropIfExists('table1447');
========
        Schema::dropIfExists('moha1');
>>>>>>>> 147d842cd0bfe9111b13334e28c18a22615541f7:database/migrations/2023_04_27_112358_create_moha1_table.php
    }
};

