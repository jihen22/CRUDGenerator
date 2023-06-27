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
<<<<<<<< HEAD:database/migrations/2023_06_26_111035_create_table666_table.php
        Schema::create('table666', function (Blueprint $table) {
                        $table->string('col666');
========
        Schema::create('tableeeeeeeeee', function (Blueprint $table) {
                        $table->string('col1');
>>>>>>>> 3ff49c72c00318e53a3b8b9dd38154aeea5747b1:database/migrations/2023_06_27_220912_create_tableeeeeeeeee_table.php
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
<<<<<<<< HEAD:database/migrations/2023_06_26_111035_create_table666_table.php
        Schema::dropIfExists('table666');
========
        Schema::dropIfExists('tableeeeeeeeee');
>>>>>>>> 3ff49c72c00318e53a3b8b9dd38154aeea5747b1:database/migrations/2023_06_27_220912_create_tableeeeeeeeee_table.php
    }
};

