<?php

namespace App\Http\Controllers;

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
        $calypsocotizaciones = Calypsocotizacion::get();
        return view('grupocalypsoIndex', compact('calypsocotizaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Calypsocotizacion  $calypsocotizacion
     * @return \Illuminate\Http\Response
     */
    public function show(Calypsocotizacion $calypsocotizacion)
    {
        return view('grupocalypsoShow', compact('calypsocotizacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Calypsocotizacion  $calypsocotizacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Calypsocotizacion $calypsocotizacion)
    {
        return view('calypsoForm', compact('calypsocotizacion'));
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
        $request->validate([
            'nombre' => ['required', 'string', 'min:3', 'max:255'],
            'telefono' => ['required', 'string', 'min:10', 'max:255'],
            'correo' => 'required|string|min:10|max:255',
            'fecha' => 'required|string|min:10|max:30',
            'lugar' => 'required',
            'mensaje' => 'required',
        ]);
        Calypsocotizacion::where('id', $calypsocotizacion->id)->update($request->except('_token', '_method'));
        return redirect()->route('calypsocotizacion.show', $calypsocotizacion);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Calypsocotizacion  $calypsocotizacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Calypsocotizacion $calypsocotizacion)
    {
        $calypsocotizacion->delete();
        return redirect()->route('calypsocotizacion.index');
    }
}
