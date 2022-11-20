<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicule', function (Blueprint $table) {
            $table->integer('Id')->autoIncrement()->primary();
            $table->integer('Immatriculation');
            $table->string('Modele', '255');
            $table->string('Marque', '255');
            $table->string('Couleur', '255');
            $table->integer('Puissance');
            $table->integer('Prix_Vente');
            $table->integer('Prix_Location');
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
        Schema::dropIfExists('vehicule');
    }
}
