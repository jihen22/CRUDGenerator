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
<<<<<<<< HEAD:database/migrations/2023_06_26_094127_create_table89_table.php
        Schema::create('table89', function (Blueprint $table) {
                        $table->string('col89');
========
        Schema::create('table1', function (Blueprint $table) {
                        $table->string('col1');
>>>>>>>> 2ffb5ecd71bd878d96ad6e83e4e99a9d7e808dd6:database/migrations/2023_06_23_014855_create_table1_table.php
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
<<<<<<<< HEAD:database/migrations/2023_06_26_094127_create_table89_table.php
        Schema::dropIfExists('table89');
========
        Schema::dropIfExists('table1');
>>>>>>>> 2ffb5ecd71bd878d96ad6e83e4e99a9d7e808dd6:database/migrations/2023_06_23_014855_create_table1_table.php
    }
};

