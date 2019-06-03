<?php

namespace App\DAO;

use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    protected $table = "paiements";
    public $timestamps = true;
    public $primaryKey = 'id_paiement';

    /*
     *  Avoir la list des paimenets en relation avec le marché
     */
    public function marche()
    {
        return $this->belongsTo(Marche::class, 'id_marche', 'id_paiement');
    }


}
