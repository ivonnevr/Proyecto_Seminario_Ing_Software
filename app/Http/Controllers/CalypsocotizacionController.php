<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Calypsocotizacion;
use Illuminate\Http\Request;

class CalypsocotizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grupoCalypso');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => ['required', 'string', 'min:3', 'max:255'],
            'telefono' => ['required', 'string', 'min:10', 'max:255'],
            'correo' => 'required|string|min:10|max:255',
            'fecha' => 'required|string|min:10|max:30',
            'lugar' => 'required',
            'mensaje' => 'required',
        ]);
        Calypsocotizacion::create($request->all());
        // return view('grupoCalypso');
        // return redirect()->route('calypsocotizacion.create');
        return redirect('grupocalypso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Calypsocotizacion  $calypsocotizacion
     * @return \Illuminate\Http\Response
     */
    public function show(Calypsocotizacion $calypsocotizacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Calypsocotizacion  $calypsocotizacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Calypsocotizacion $calypsocotizacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Calypsocotizacion  $calypsocotizacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Calypsocotizacion $calypsocotizacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Calypsocotizacion  $calypsocotizacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Calypsocotizacion $calypsocotizacion)
    {
        //
    }
}
