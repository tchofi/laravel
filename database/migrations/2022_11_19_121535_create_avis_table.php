<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avis', function (Blueprint $table) {
            // $table->id('IdAvis');
            $table->integer('Id')->autoIncrement()->primary();
            $table->integer('Id_User');
            $table->text('commentaire');
            $table->dateTime('date');
            $table->timestamps();
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
        Schema::dropIfExists('avis');
    }
}
