<?php

namespace App\Http\Controllers\API;

use App\DAO\Paiement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaiementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     * @author : BOUARFA Karim
     */
    public function index()
    {
        $paiement = Paiement::all();

        return response()->json($paiement);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     *
     * @author : BOUARFA Karim
     */
    public function create()
    {
        // Excepted
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     * @author : BOUARFA Karim
     */
    public function store(Request $request)
    {
        $paiement = new Paiement();

        $paiement->id_paiement = $request->get('id_paiement');
        $paiement->id_marché = $request->get('id_marché');
        $paiement->montant = $request->get('montant');
        $paiement->date_paiement = $request->get('date_paiement');

        $paiement->save();

        return response()->json($paiement);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     * @author : BOUARFA Karim
     */
    public function show($id)
    {
        $paiement = Paiement::find($id);

        return response()->json($paiement);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     * @author : BOUARFA Karim
     */
    public function edit($id)
    {
        // Excepted
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     * @author : BOUARFA Karim
     */
    public function update(Request $request, $id)
    {
        $paiement = Paiement::where('id_paiement', $id)->first();

        if($paiement != null)
        {
            $paiement->id_paiement = $request->get('id_paiement');
            $paiement->id_marché = $request->get('id_marché');
            $paiement->montant = $request->get('montant');
            $paiement->date_paiement = $request->get('date_paiement');

            $paiement->save();
        }

        return response()->json($paiement);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     * @author : BOUARFA Karim
     */
    public function destroy($id)
    {
        $paiement = Paiement::where('id_paiement', $id)->first();
        $paiement->delete();

        return response()->json([], 204);
    }
}
