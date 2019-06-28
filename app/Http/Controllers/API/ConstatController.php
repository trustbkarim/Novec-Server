<?php

namespace App\Http\Controllers\API;

use App\DAO\Constat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConstatController extends Controller
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
        $constat = Constat::all();

        return response()->json($constat);

        /*$constat = Constat::with(['sousRubrique', 'rubrique', 'marche'])->get();

        return response()->json($constat);*/

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
        $constat = new Constat();

        $constat->id_marche = $request->get('id_marche');
        $constat->id_rubrique = $request->get('id_rubrique');
        $constat->id_sous_rubrique = $request->get('id_sous_rubrique');
        $constat->id_periode = $request->get('id_periode');
        $constat->valeur_constat = $request->get('valeur_constat');

        $constat->save();

        return response()->json($constat);
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
        $constat = Constat::find($id);

        return response()->json($constat);
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
        /*$constat = Constat::where('id_constat', $id)->first(); */

        $constat = Constat::find($id);

        //if($constat != null)
        //{
            $constat->id_marche = $request->get('id_marche');
            $constat->id_rubrique = $request->get('id_rubrique');
            $constat->id_sous_rubrique = $request->get('id_sous_rubrique');
            $constat->id_periode = $request->get('id_periode');
            $constat->valeur_constat = $request->get('valeur_constat');

            $constat->save();
        //}

        return response()->json($constat);
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
        $constat = Constat::where('id_constat', $id)->first();
        $constat->delete();

        return response()->json([], 204);
    }
}
