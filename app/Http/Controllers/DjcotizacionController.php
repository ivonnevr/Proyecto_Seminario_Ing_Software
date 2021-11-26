<?php

namespace App\Http\Controllers;

use App\Models\Djcotizacion;
use Illuminate\Http\Request;

class DjcotizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $djcotizaciones = Djcotizacion::get();
        return view('dluxdjIndex', compact('djcotizaciones'));
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
     * @param  \App\Models\Djcotizacion  $djcotizacion
     * @return \Illuminate\Http\Response
     */
    public function show(Djcotizacion $djcotizacion)
    {
        return view('dluxdjShow', compact('djcotizacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Djcotizacion  $djcotizacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Djcotizacion $djcotizacion)
    {
        return view('dluxdjForm', compact('djcotizacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Djcotizacion  $djcotizacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Djcotizacion $djcotizacion)
    {
        $request->validate([
            'nombre' => ['required', 'string', 'min:3', 'max:255'],
            'telefono' => ['required', 'string', 'min:10', 'max:255'],
            'correo' => 'required|string|min:10|max:255',
            'fecha' => 'required|string|min:10|max:30',
            'paquete' => 'required',
            'lugar' => 'required',
            'mensaje' => 'required',
        ]);
        Djcotizacion::where('id', $djcotizacion->id)->update($request->except('_token', '_method'));
        return redirect()->route('djcotizacion.show', $djcotizacion);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Djcotizacion  $djcotizacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Djcotizacion $djcotizacion)
    {
        $djcotizacion->delete();
        return redirect()->route('djcotizacion.index');
    }
}
