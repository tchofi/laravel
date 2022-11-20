<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('access', function (Blueprint $table) {
            // $table->id('Id_Access');
            $table->integer('Id')->autoIncrement()->primary();
            $table->integer('Id_Role');
            $table->integer('Id_User');
            $table->integer('Access_Code');
            $table->timestamps();
            $table->foreign('Id_User')->references('Id')->on('user');   //Permet de Preciser que l'attribut IdUser de la table correspod à l'attribut IdUser de la table User
            $table->foreign('Id_Role')->references('Id')->on('role');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('access');
    }
}
