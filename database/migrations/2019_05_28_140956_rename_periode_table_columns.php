<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenamePeriodeTableColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('période', function (Blueprint $table) {
            $table->renameColumn('id_période', 'id_periode');
            $table->renameColumn('lib_période', 'lib_periode');
            $table->renameColumn('num_période', 'num_periode');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('période', function (Blueprint $table) {
            $table->renameColumn('id_periode', 'id_période');
            $table->renameColumn('lib_periode', 'lib_période');
            $table->renameColumn('num_periode', 'num_période');
        });
    }
}
