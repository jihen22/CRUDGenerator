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
        Schema::table('fieldslist4', function (Blueprint $table) {
            $table->boolean('nullable')->default(false);
            $table->boolean('unique')->default(false);
            $table->boolean('indexing')->default(false);
            $table->string('validationRules')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fieldslist4', function (Blueprint $table) {
            $table->dropColumn('nullable');
            $table->dropColumn('unique');
            $table->dropColumn('indexed');
            $table->dropColumn('validation_rules');
        });
    }
};
