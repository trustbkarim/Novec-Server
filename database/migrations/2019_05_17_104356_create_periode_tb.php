<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeriodeTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('période', function (Blueprint $table) {
            $table->increments('id_période');
            $table->decimal('suivi_avancement_cum_physique', 7, 4);
            $table->integer('id_projet');
            $table->string('lib_période');
            $table->integer('num_période');
            $table->decimal('suivi_avancement_unitaire_physique', 7, 4);
            $table->decimal('suivi_avancement_unitaire_financier', 7, 4);
            $table->decimal('suivi_avancement_cumulé_financier', 7, 4);
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
        Schema::dropIfExists('période');
    }
}
