<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarcheTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marché', function (Blueprint $table) {
            $table->integer('id_marché');
            $table->string('num_marché');
            $table->string('intitulé');
            $table->integer('durée_jour');
            $table->integer('durée_mois');
            $table->decimal('montant_marché', 10, 2);
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
        Schema::dropIfExists('marché');
    }
}
