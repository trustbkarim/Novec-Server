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
        return $this->hasOne(Periode::class, 'id_periode', 'id_constat');
    }

    /*
     * Avoir la sous-rubrique en relation avec le constat
    */
    public function sousRubrique()
    {
        return $this->belongsTo(Sous_Rubrique::class, 'id_sous_rubrique', 'id_constat');
    }
}