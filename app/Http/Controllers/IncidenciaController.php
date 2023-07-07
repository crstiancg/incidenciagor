<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Etiqueta;
use App\Models\Incidencia;
use App\Models\Oficina;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class IncidenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $incidencias = Incidencia::all();

        return view('admin.incidencias.index', compact('incidencias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $oficinas = Oficina::all();
        $etiquetas = Etiqueta::all();
        $equipos = Equipo::all();
        return view('admin.incidencias.create', \compact('oficinas', 'etiquetas','equipos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $incidencia = new Incidencia();

        $incidencia->descripcion = $request->descripcion;
        $incidencia->usuario = $request->usuario;
        $incidencia->nivel = $request->nivel;
        $incidencia->fecha_apertura = Carbon::now();
        $incidencia->estado = $request->estado;
        $incidencia->equipo_id = $request->equipo_id;
        $incidencia->oficina_id = $request->oficina_id;
        $incidencia->user_id = auth()->user()->id;
        $incidencia->etiqueta_id = $request->etiqueta_id;
        $incidencia->respuesta = $request->respuesta;

        $incidencia->save();

        return Redirect::route('admin.incidencias.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Incidencia $incidencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Incidencia $incidencia)
    {
        $oficinas = Oficina::all();
        $etiquetas = Etiqueta::all();
        $equipos = Equipo::all();
        return view('admin.incidencias.edit', \compact('equipos','oficinas', 'etiquetas', 'incidencia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Incidencia $incidencia)
    {
        $incidencia->descripcion = $request->descripcion;
        $incidencia->usuario = $request->usuario;
        $incidencia->nivel = $request->nivel;
        $incidencia->fecha_apertura = Carbon::now();
        $incidencia->estado = $request->estado;
        $incidencia->equipo_id = $request->equipo_id;
        $incidencia->oficina_id = $request->oficina_id;
        $incidencia->user_id = auth()->user()->id;
        $incidencia->etiqueta_id = $request->etiqueta_id;
        $incidencia->respuesta = $request->respuesta;

        $incidencia->save();

        return Redirect::route('admin.incidencias.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Incidencia $incidencia)
    {
        $incidencia->delete();

        return Redirect::route('admin.incidencias.index');

    }
}
