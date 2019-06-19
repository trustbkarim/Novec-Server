<?php

namespace App\Http\Controllers\API;

use App\DAO\Sous_Rubrique;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SousRubriqueController extends Controller
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
        $sous_rubrique = Sous_Rubrique::all();

        return response()->json($sous_rubrique);

        /*$sous_rubrique = Sous_Rubrique::with(['constat'])->get();

        return response()->json($sous_rubrique); */
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
        $sous_rubrique = new Sous_Rubrique();

        $sous_rubrique->id_sous_rubrique = $request->get('id_sous_rubrique');
        $sous_rubrique->id_marché = $request->get('id_marché');
        $sous_rubrique->id_rubrique = $request->get('id_rubrique');
        $sous_rubrique->lib_sous_rubrique = $request->get('lib_sous_rubrique');
        $sous_rubrique->unité = $request->get('unité');
        $sous_rubrique->valeur_cible = $request->get('valeur_cible');
        $sous_rubrique->poids = $request->get('poids');

        $sous_rubrique->save();

        return response()->json($sous_rubrique);

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
        $sous_rubrique = Sous_Rubrique::find($id);

        return response()->json($sous_rubrique);
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
        $sous_rubrique = Sous_Rubrique::where('id_sous_rubrique', $id)->first();

        if($sous_rubrique != null)
        {
            $sous_rubrique->id_sous_rubrique = $request->get('id_sous_rubrique');
            $sous_rubrique->id_marché = $request->get('id_marché');
            $sous_rubrique->id_rubrique = $request->get('id_rubrique');
            $sous_rubrique->lib_sous_rubrique = $request->get('lib_sous_rubrique');
            $sous_rubrique->unité = $request->get('unité');
            $sous_rubrique->valeur_cible = $request->get('valeur_cible');
            $sous_rubrique->poids = $request->get('poids');

            $sous_rubrique->save();
        }

        return response()->json($sous_rubrique);
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
        $sous_rubrique =  Sous_Rubrique::where('id_sous_rubrique', $id)->first();
        $sous_rubrique->delete();

        return response()->json([], 204);
    }
}
