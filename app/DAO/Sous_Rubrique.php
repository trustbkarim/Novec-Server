<?php

namespace App\DAO;

use Illuminate\Database\Eloquent\Model;

class Sous_Rubrique extends Model
{
    protected $table = 'sous_rubriques';
    public $timestamps = true;
    public $primaryKey = 'id_sous_rubrique';

    /*
     * Avoir la rubrique en relation avec la sous-rubrique
     */
    public function rubrique()
    {
        return $this->belongsTo(Rubrique::class, 'id_rubrique', 'id_sous_rubrique');
    }

    /*
     * Avoir le constat en relation avec la sous-rubrique
     */
    public function constat()
    {
        return $this->hasOne(Constat::class, 'id_constat', 'id_sous_rubrique');
    }


    /* --------- Ce qui est rajouté dernièrement afin d'avoir le lien entre la table marché --------- */


    /*
     * Avoir les constats en relation avec le marché
    */
    public function marche()
    {
        return $this->belongsTo(Marche::class, 'id_marche', 'id_sous_rubrique');
    }

}
