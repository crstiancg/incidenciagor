<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Oficina;
use App\Models\Tipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipos = Equipo::all();
        return view('admin.equipos.index', compact('equipos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $oficinas = Oficina::all();
        $tipos = Tipo::all();
        return view('admin.equipos.create', compact('oficinas', 'tipos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $equipo = new Equipo();

        $equipo->codpatrominal = $request->codpatrominal;
        $equipo->modelo = $request->modelo;
        $equipo->marca = $request->marca;
        $equipo->serie = $request->serie;
        $equipo->ip = $request->ip;
        $equipo->descripcion = $request->descripcion;
        $equipo->estado = $request->estado;
        $equipo->condicion = $request->condicion;
        $equipo->observacion = $request->observacion;
        $equipo->oficina_id = $request->oficina_id;
        $equipo->tipo_id = $request->tipo_id;

        $equipo->save();

        return Redirect::route('admin.equipos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Equipo $equipo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Equipo $equipo)
    {
        $oficinas = Oficina::all();
        $tipos = Tipo::all();

        return view('admin.equipos.edit', compact('oficinas', 'tipos','equipo'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Equipo $equipo)
    {
        $equipo->codpatrominal = $request->codpatrominal;
        $equipo->modelo = $request->modelo;
        $equipo->marca = $request->marca;
        $equipo->serie = $request->serie;
        $equipo->ip = $request->ip;
        $equipo->descripcion = $request->descripcion;
        $equipo->estado = $request->estado;
        $equipo->condicion = $request->condicion;
        $equipo->observacion = $request->observacion;
        $equipo->oficina_id = $request->oficina_id;
        $equipo->tipo_id = $request->tipo_id;

        $equipo->save();

        return Redirect::route('admin.equipos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Equipo $equipo)
    {
        $equipo->delete();

        return Redirect::back();        
    }
}
