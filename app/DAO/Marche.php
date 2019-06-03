<?php

namespace App\DAO;

use Illuminate\Database\Eloquent\Model;

class Marche extends Model
{
    protected $table = 'marché';
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
}
