<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameRubriqueTableColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rubriques', function (Blueprint $table) {
            $table->renameColumn('id_marché', 'id_marche');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rubriques', function (Blueprint $table) {
            $table->renameColumn('id_marche', 'id_marché');
        });
    }
}
