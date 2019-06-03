<?php

namespace App\DAO;

use Illuminate\Database\Eloquent\Model;

class Rubrique extends Model
{
    protected $table = 'rubriques';
    public $timestamps = true;
    public $primaryKey = 'id';

    /*
     * Avoir la liste des sous-rubliques en relation avec la rubrique
    */
    public function sousRubrique()
    {
        return $this->hasMany(Sous_Rubrique::class, 'id_rubrique', 'id');
    }

    /*
     * Avoir le marché en relation avec la rubrique
    */
    public function marche()
    {
        return $this->belongsTo(Marche::class, 'id_marche', 'id');
    }

}
