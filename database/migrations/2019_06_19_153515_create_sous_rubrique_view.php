<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateSousRubriqueView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::connection()->getPdo()->exec("CREATE VIEW taux_avancement_sous_rubrique as 
        SELECT c.id_marche, c.id_rubrique, c.id_sous_rubrique, sb.lib_sous_rubrique, 
        c.id_periode, sb.poids, (c.valeur_constat / sb.valeur_cible) as 'taux_avancement_sous_rubrique'
        from sous_rubriques sb inner join constats c 
        on sb.id_sous_rubrique = c.id_sous_rubrique");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::connection()->getPdo()->exec("drop view taux_avancement_sous_rubrique");
    }
}
