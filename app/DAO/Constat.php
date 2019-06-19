<?php

namespace App\DAO;

use Illuminate\Database\Eloquent\Model;

class Constat extends Model
{
    protected $table = 'constats';
    public $timestamps = true;
    public $primaryKey = 'id_constat';

    /*
     * Avoir la list des périodes en relation avec le constat
     */
    public function periode()
    {
        return $this->hasMany(Periode::class, 'id_periode', 'id_constat');
    }

    /*
     * Avoir la sous-rubrique en relation avec le constat
    */
    public function sousRubrique()
    {
        return $this->belongsTo(Sous_Rubrique::class, 'id_sous_rubrique', 'id_constat');
    }

    /* --------------- Ce qui est rajouté dernièrement afin d'avoir le lien entre les différentes tables ------------- */

    /*
     * Avoir la rubrique en relation avec le constat
    */
    public function rubrique()
    {
        return $this->belongsTo(Rubrique::class, 'id_rubrique', 'id_constat');
    }

    /*
     * Avoir le marché en relation avec le constat
    */
    public function marche()
    {
        return $this->belongsTo(Marche::class, 'id_marches', 'id_constat');
    }
}