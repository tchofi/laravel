<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaiementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paiement', function (Blueprint $table) {
            //$table->id('IdPaiement');
            $table->integer('Id')->autoIncrement()->primary();
            $table->integer('Id_Service');
            $table->integer('Id_User');
            $table->dateTime('Date');
            $table->integer('Montant');
            $table->string('Moyen', '255');
            $table->timestamps();
            $table->foreign('Id_Service')->references('Id')->on('service');
            $table->foreign('Id_User')->references('Id')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paiement');
    }
}
