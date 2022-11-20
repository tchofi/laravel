<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutorisationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autorisation', function (Blueprint $table) {
            //$table->id('IdAutorisation');
            $table->integer('Id')->autoIncrement()->primary();
            $table->boolean('Creation');
            $table->boolean('Modification');
            $table->boolean('Suppresion');
            $table->boolean('Lecture');
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
        Schema::dropIfExists('autorisation');
    }
}
