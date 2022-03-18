<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolutionTranslate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solution_translate', function (Blueprint $table) {
            $table->id();
            $table->integer('item_id');
            $table->string('category_name');
            $table->string('name');
            $table->string('first_info');
            $table->string('last_info');
            $table->integer('lang');
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
        Schema::dropIfExists('solution_translate');
    }
}
