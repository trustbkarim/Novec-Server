<?php

namespace App\Http\Controllers\API;

use App\DAO\Marche;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MarcheController extends Controller
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
        $marches = Marche::all();

        return response()->json($marches);
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
        /*
        $rules = [
            'id_marché' => 'required|integer',
            'num_marché' => 'required',
            'intitulé' => 'required',
            'durée_jour' => 'required|date',
            'durée_mois' => 'required|date',
            'montant_marché' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);
        return $validator->getMessageBag()->getMessages();
        */

        $marche = new Marche();

        $marche->id_marché = $request->get('id_marché');
        $marche->num_marché = $request->get('num_marché');
        $marche->intitulé = $request->get('intitulé');
        $marche->durée_jour = $request->get('durée_jour');
        $marche->durée_mois = $request->get('durée_mois');
        $marche->montant_marché = $request->get('montant_marché');

        $marche->save();

        return response()->json($marche);
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
        $marche = Marche::find($id);

        return response()->json($marche);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
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
        $marche = Marche::where('id_marché', $id)->first();

        if($marche != null)
        {
            $marche->id_marché = $request->get('id_marché');
            $marche->num_marché = $request->get('num_marché');
            $marche->intitulé = $request->get('intitulé');
            $marche->durée_jour = $request->get('durée_jour');
            $marche->durée_mois = $request->get('durée_mois');
            $marche->montant_marché = $request->get('montant_marché');

            $marche->save();
        }

        return response()->json($marche);
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
        $marche = Marche::where('id_marché', $id)->first();
        $marche->delete();

        return response()->json([], 204);
    }
}
