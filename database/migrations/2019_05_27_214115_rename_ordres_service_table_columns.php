<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameOrdresServiceTableColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Ordres_Service', function (Blueprint $table) {
            $table->renameColumn('id_marché', 'id_marche');
            $table->renameColumn('date_os_début', 'date_os_debut');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Ordres_Service', function (Blueprint $table) {
            $table->renameColumn('id_marche', 'id_marché');
            $table->renameColumn('date_os_debut', 'date_os_début');
        });
    }
}
