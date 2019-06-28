<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableInformationView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::connection()->getPdo()->exec("create view table_informations as
        select m.intitule as 'marche', r.lib_rubrique as 'rubrique', sr.lib_sous_rubrique as 'sous_rubrique', p.lib_periode as 'periode', sr.valeur_cible as 'valeur_cible', c.valeur_constat as 'valeur_constat' from 
        marches m inner join rubriques r on m.id_marche = r.id_marche
        inner join sous_rubriques sr on r.id = sr.id_rubrique 
        inner join constats c on sr.id_sous_rubrique = c.id_sous_rubrique
        inner join periodes p on c.id_periode = p.id_periode");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::connection()->getPdo()->exec("drop view table_informations");
    }
}
