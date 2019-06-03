<?php

namespace App\Http\Controllers\API;

use App\DAO\Ordre_Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrdresServiceController extends Controller
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
        $os = Ordre_Service::all();

        return response()->json($os);
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
        $ordre_service = new Ordre_Service();

        $ordre_service->id_os = $request->get('id_os');
        $ordre_service->id_marché = $request->get('id_marché');
        $ordre_service->date_os_début = $request->get('date_os_début');
        $ordre_service->date_os_fin = $request->get('date_os_fin');

        $ordre_service->save();

        return response()->json($ordre_service);
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
        $os = Ordre_Service::find($id);

        return response()->json($os);
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
        $ordre_service = Ordre_Service::where('id_os', $id)->first();

        if($ordre_service != null)
        {
            $ordre_service->id_os = $request->get('id_os');
            $ordre_service->id_marché = $request->get('id_marché');
            $ordre_service->date_os_début = $request->get('date_os_début');
            $ordre_service->date_os_fin = $request->get('date_os_fin');

            $ordre_service->save();
        }

        return response()->json($ordre_service);
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
        $os = Ordre_Service::where('id_os', $id)->first();
        $os->delete();

        return response()->json([], 204);
    }
}
