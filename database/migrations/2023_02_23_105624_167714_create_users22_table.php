<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class create_users22_table extends Migration
{
    public function up()
    {
        Schema::create('users22', function (Blueprint $table) {
            $table->string('name');

        });
    }

    public function down()
    {
        Schema::dropIfExists('users22');
    }
}
