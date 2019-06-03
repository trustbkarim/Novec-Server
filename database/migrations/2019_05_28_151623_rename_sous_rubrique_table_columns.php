<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameSousRubriqueTableColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sous_rubriques', function (Blueprint $table) {
            $table->renameColumn('id_marché', 'id_marche');
            $table->renameColumn('unité', 'unite');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sous_rubriques', function (Blueprint $table) {
            $table->renameColumn('id_marche', 'id_marché');
            $table->renameColumn('unite', 'unité');
        });
    }
}
