<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabilitationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habilitation', function (Blueprint $table) {
            //$table->id('IdHabilitation');
            $table->integer('Id_Habilitation')->autoIncrement()->primary();
            $table->integer('Id_Menu');
            $table->integer('Id_Role');
            $table->integer('Id_Autorisation');
            $table->timestamps();
            $table->foreign('Id_Menu')->references('Id')->on('menu');
            $table->foreign('Id_Role')->references('Id')->on('role');
            $table->foreign('Id_Autorisation')->references('Id')->on('autorisation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('habilitation');
    }
}
