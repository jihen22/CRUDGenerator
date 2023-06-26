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
<<<<<<<< HEAD:database/migrations/2023_06_23_144758_create_etudiant_table.php
        Schema::create('etudiant', function (Blueprint $table) {
                        $table->string('prenom');
========
        Schema::create('tt2', function (Blueprint $table) {
                        $table->string('col2');
>>>>>>>> 2ffb5ecd71bd878d96ad6e83e4e99a9d7e808dd6:database/migrations/2023_06_23_015451_create_tt2_table.php
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
<<<<<<<< HEAD:database/migrations/2023_06_23_144758_create_etudiant_table.php
        Schema::dropIfExists('etudiant');
========
        Schema::dropIfExists('tt2');
>>>>>>>> 2ffb5ecd71bd878d96ad6e83e4e99a9d7e808dd6:database/migrations/2023_06_23_015451_create_tt2_table.php
    }
};

