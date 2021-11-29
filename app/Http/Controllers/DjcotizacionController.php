<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dluxDJ');
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
            'telefono' => ['required', 'string', 'min:10', 'max:30'],
            'correo' => 'required|string|min:10|max:255',
            'fecha' => 'required|string|min:10|max:30',
            'paquete' => 'required',
            'lugar' => 'required|string|min:5',
            'mensaje' => 'required|string|min:5|max:255',
        ]);
        Djcotizacion::create($request->all());
        // return view('dluxDJ');
        // return redirect()->route('djcotizacion.create');
        echo "
            <script>
                alert('Formulario enviado correctamente, en breve nos pondremos en contacto con usted.');
                window.location= 'dluxdj';
            </script>";
        // return redirect('dluxdj');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Djcotizacion  $djcotizacion
     * @return \Illuminate\Http\Response
     */
    public function show(Djcotizacion $djcotizacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Djcotizacion  $djcotizacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Djcotizacion $djcotizacion)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Djcotizacion  $djcotizacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Djcotizacion $djcotizacion)
    {
        //
    }
}
