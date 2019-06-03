<?php

namespace App\Http\Controllers\API;

use App\DAO\Periode;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PeriodeController extends Controller
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
        $constat = Periode::with(['constats'])->get();

        return response()->json($constat);


        /* $periode = Periode::all();
        return response()->json($constat); */

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
        $periode = new Periode();

        $periode->id_période = $request->get('id_période');
        $periode->suivi_avancement_cum_physique = $request->get('suivi_avancement_cum_physique');
        $periode->id_projet = $request->get('id_projet');
        $periode->lib_période = $request->get('lib_période');
        $periode->num_période = $request->get('num_période');
        $periode->suivi_avancement_unitaire_physique = $request->get('suivi_avancement_unitaire_physique');
        $periode->suivi_avancement_unitaire_financier = $request->get('suivi_avancement_unitaire_financier');
        $periode->suivi_avancement_cumulé_financier = $request->get('suivi_avancement_cumulé_financier');

        $periode->save();

        return response()->json($periode);

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
        $periode = Periode::find($id);

        return response()->json($periode);
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
        $periode = Periode::where('id_période', $id)->first();

        if($periode != null)
        {
            $periode->id_période = $request->get('id_période');
            $periode->suivi_avancement_cum_physique = $request->get('suivi_avancement_cum_physique');
            $periode->id_projet = $request->get('id_projet');
            $periode->lib_période = $request->get('lib_période');
            $periode->num_période = $request->get('num_période');
            $periode->suivi_avancement_unitaire_physique = $request->get('suivi_avancement_unitaire_physique');
            $periode->suivi_avancement_unitaire_financier = $request->get('suivi_avancement_unitaire_financier');
            $periode->suivi_avancement_cumulé_financier = $request->get('suivi_avancement_cumulé_financier');

            $periode->save();
        }

        return response()->json($periode);

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
        $periode = Periode::where('id_période', $id)->first();
        $periode->delete();

        return response()->json([], 204);
    }
}
