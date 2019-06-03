<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameMarcheTableColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('marché', function (Blueprint $table) {
            $table->renameColumn('id_marché', 'id_marche');
            $table->renameColumn('num_marché', 'num_marche');
            $table->renameColumn('intitulé', 'intitule');
            $table->renameColumn('durée_jour', 'duree_jour');
            $table->renameColumn('durée_mois', 'duree_mois');
            $table->renameColumn('montant_marché', 'montant_marche');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('marché', function (Blueprint $table) {
            $table->renameColumn('id_marche', 'id_marché');
            $table->renameColumn('num_marche', 'num_marché');
            $table->renameColumn('intitule', 'intitulé');
            $table->renameColumn('duree_jour', 'durée_jour');
            $table->renameColumn('duree_mois', 'durée_mois');
            $table->renameColumn('montant_marche', 'montant_marché');
        });
    }
}
