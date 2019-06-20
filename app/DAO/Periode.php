<?php

namespace App\DAO;

use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    protected $table = 'periodes';
    public $timestamps = true;
    public $primaryKey = 'id_periode';

    /*
     * Avoir le constat en relation avec la période
     */
    public function constats()
    {
        return $this->belongsTo(Constat::class, 'id_periode', 'id_periode');
    }


}
