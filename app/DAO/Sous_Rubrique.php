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

}
