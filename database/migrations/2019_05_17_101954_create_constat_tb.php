<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConstatTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constats', function (Blueprint $table) {
            $table->increments('id_constat');
            $table->integer('id_marché');
            $table->integer('id_rubrique');
            $table->integer('id_sous_rubrique');
            $table->integer('id_période');
            $table->integer('valeur_constat');
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
        Schema::dropIfExists('constats');
    }
}
