<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
	    SELECT m.intitule as 'marche', r.lib_rubrique as 'rubrique', sb.lib_sous_rubrique as 'sous_rubrique', p.lib_periode as 'periode', (c.valeur_constat / sb.valeur_cible) as 'taux_avancement_sous_rubrique' FROM 
	    periodes p inner join constats c on p.id_periode = c.id_periode
	    inner join sous_rubriques sb on c.id_sous_rubrique = sb.id_sous_rubrique
	    inner join rubriques r on r.id = sb.id_rubrique
	    inner join marches m on m.id_marche = r.id_marche");
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
