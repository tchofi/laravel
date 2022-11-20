<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            //$table->id();
            $table->integer('Id')->autoIncrement()->primary();
            $table->string('Nom', '255');
            $table->string('Prenom', '255');
            $table->string('Email', '255')->unique();
            $table->string('Password', '255');
            $table->string('Pseudo', '255');
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
        Schema::dropIfExists('user');
    }
}
