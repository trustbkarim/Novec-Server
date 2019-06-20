<?php

namespace App\DAO;

use Illuminate\Database\Eloquent\Model;

class Marche extends Model
{
    protected $table = 'marches';
    public $timestamps = true;
    public $primaryKey = 'id_marche';

    /*
     * Avoir la list des paimenets en relation avec le marché
     */
    public function paiements()
    {
        return $this->hasMany(Paiement::class, 'id_marche', 'id_marche');
    }

    /*
     * Avoir la list des ordres de service en relation avec le marché
     */
    public function OrdresService()
    {
        return $this->hasMany(Ordre_Service::class, 'id_marche', 'id_marche');
    }

    /*
     * Avoir la list des rubrique en relation avec le marché
     */
    public function rubriques()
    {
        return $this->hasMany(Rubrique::class, 'id_marche', 'id_marche');
    }


    /* --------- Ce qui est rajouté dernièrement afin d'avoir le lien entre la table constat --------- */


    /*
     * Avoir les constats en relation avec le marché
    */
    public function constats()
    {
        return $this->hasMany(Constat::class, 'id_constat', 'id_marche');
    }

    /*
     * Avoir les sous-rubriques en relation avec le marché
    */
    public function sousRubriques()
    {
        return $this->hasMany(Sous_Rubrique::class, 'id_sous_rubrique', 'id_marche');
    }


}
