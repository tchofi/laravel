<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            //$table->id('IdClient');
            $table->integer('Id')->autoIncrement()->primary();
            $table->string('Nom', '255');
            $table->string('Prenom', '255');
            $table->string('Email', '255')->unique();
            $table->string('Adresse', '255');
            $table->integer('Telephone');
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
        Schema::dropIfExists('customer');
    }
}
