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
        Schema::create('fieldslist4', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('table_id');
            $table->string('field_type');
            $table->string('database_column_name');
            $table->string('validation');
            $table->string('visual_title');
            $table->string('in_list');
            $table->string('in_create');
            $table->string('in_show');
            $table->string('in_edit');
            $table->integer('max')->nullable();
            $table->integer('min')->nullable();
            $table->integer('default_value')->nullable();
       
            $table->timestamps();

            $table->foreign('table_id')->references('id')->on('tableslist');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feildslist4');
    }
};
