<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSousRubriquesTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sous_rubriques', function (Blueprint $table) {
            $table->increments('id_sous_rubrique');
            $table->integer('id_marché');
            $table->integer('id_rubrique');
            $table->text('lib_sous_rubrique');
            $table->string('unité');
            $table->integer('valeur_cible');
            $table->float('poids');
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
        Schema::dropIfExists('sous_rubriques');
    }
}
