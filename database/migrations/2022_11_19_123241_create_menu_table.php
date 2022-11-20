<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            //$table->id('IdMenu');
            $table->integer('Id')->autoIncrement()->primary();
            $table->string('NomMenu', '255');
            $table->string('Icon', '255');
            $table->string('Groupe', '255');
            $table->integer('Ordre');
            $table->text('NomTable');
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
        Schema::dropIfExists('menu');
    }
}
