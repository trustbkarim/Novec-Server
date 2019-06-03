<?php

namespace App\DAO;

use Illuminate\Database\Eloquent\Model;

class Ordre_Service extends Model
{
    protected $table = 'Ordres_Service';
    public $timestamps = true;
    public $primaryKey = 'id_os';

    /*
     *  Avoir l'ordre de service en relation avec le marché
     */
    public function marche()
    {
        return $this->belongsTo(Marche::class, 'id_marche', 'id_os');
    }
}
