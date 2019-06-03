<?php

namespace App\Http\Controllers\API;

use App\DAO\Rubrique;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RubriqueController extends Controller
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
        $rubrique = Rubrique::all();

        return response()->json($rubrique);
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
        $rubrique = new Rubrique();

        $rubrique->id = $request->get('id');
        $rubrique->id_marché = $request->get('id_marché');
        $rubrique->lib_rubrique = $request->get('lib_rubrique');

        $rubrique->save();

        return response()->json($rubrique);
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
        $rubrique = Rubrique::find($id);

        return response()->json($rubrique);
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
        $rubrique = Rubrique::where('id', $id)->first();

        if($rubrique != null)
        {
            $rubrique->id = $request->get('id');
            $rubrique->id_marché = $request->get('id_marché');
            $rubrique->lib_rubrique = $request->get('lib_rubrique');

            $rubrique->save();
        }

        return response()->json($rubrique);
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
        $rubrique = Rubrique::where('id', $id)->first();
        $rubrique->delete();

        return response()->json([], 204);
    }
}
