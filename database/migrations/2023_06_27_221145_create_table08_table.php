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
<<<<<<<< HEAD:database/migrations/2023_06_26_104729_create_table585_table.php
        Schema::create('table585', function (Blueprint $table) {
                        $table->string('col585');
========
        Schema::create('table08', function (Blueprint $table) {
                        $table->string('col99999');
>>>>>>>> 3ff49c72c00318e53a3b8b9dd38154aeea5747b1:database/migrations/2023_06_27_221145_create_table08_table.php
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
<<<<<<<< HEAD:database/migrations/2023_06_26_104729_create_table585_table.php
        Schema::dropIfExists('table585');
========
        Schema::dropIfExists('table08');
>>>>>>>> 3ff49c72c00318e53a3b8b9dd38154aeea5747b1:database/migrations/2023_06_27_221145_create_table08_table.php
    }
};

