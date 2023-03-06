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
        Schema::create('fieldslist', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('table_id');
            $table->string('field_type');
            $table->string('database_column_name');
            $table->string('visual_title');
            $table->boolean('in_list');
            $table->boolean('in_create');
            $table->boolean('in_show');
            $table->boolean('in_edit');
            $table->boolean('required');
            $table->integer('max')->nullable();
            $table->integer('min')->nullable();
            $table->string('default_value')->nullable();
            $table->boolean('edit')->default(true);
            $table->boolean('delete')->default(true);
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
        Schema::dropIfExists('feildslist');
    }
};
