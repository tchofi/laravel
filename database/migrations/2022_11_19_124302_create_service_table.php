<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service', function (Blueprint $table) {
            $table->integer('Id')->autoIncrement()->primary();
            $table->integer('Id_Vehicule');
            $table->integer('Id_Client');
            $table->string('Type', '255');
            $table->dateTime('DateDebut');
            $table->dateTime('DateFin');
            $table->timestamps();
            $table->foreign('Id_Vehicule')->references('Id')->on('vehicule');
            $table->foreign('Id_Client')->references('Id')->on('client');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service');
    }
}
