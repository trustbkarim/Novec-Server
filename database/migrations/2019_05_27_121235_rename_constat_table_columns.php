<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameConstatTableColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('constats', function (Blueprint $table) {
            $table->renameColumn('id_marché', 'id_marche');
            $table->renameColumn('id_période', 'id_periode');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('constats', function (Blueprint $table) {
            $table->renameColumn('id_marche', 'id_marché');
            $table->renameColumn('id_periode', 'id_période');
        });
    }
}
