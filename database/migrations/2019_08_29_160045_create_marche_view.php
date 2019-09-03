<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarcheView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::connection()->getPdo()->exec("CREATE VIEW taux_avancement_marche as 
        SELECT m.num_marche as 'marche', m.montant_marche, m.duree_mois, p.date_attachement as 'periode', 
        sum(c.valeur_constat / sb.valeur_cible) as 'taux_avancement_marche' 
        FROM periodes p inner join constats c on p.id_periode = c.id_periode 
        inner join sous_rubriques sb on c.id_sous_rubrique = sb.id_sous_rubrique 
        inner join rubriques r on r.id = sb.id_rubrique 
        inner join marches m on m.id_marche = r.id_marche 
        where sb.id_sous_rubrique = c.id_sous_rubrique AND sb.id_rubrique = c.id_rubrique 
        group by m.id_marche");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::connection()->getPdo()->exec("drop view taux_avancement_marche");
    }
}
