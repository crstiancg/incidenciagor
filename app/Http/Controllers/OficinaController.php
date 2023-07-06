<?php

namespace App\Http\Controllers;

use App\Models\Oficina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class OficinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $oficinas = Oficina::all();
        return view('admin.oficinas.index', compact('oficinas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.oficinas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $oficina = new Oficina();

        $oficina->nombre = $request->nombre;
        $oficina->username = $request->username;

        $oficina->save();

        return Redirect::route('admin.oficinas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Oficina $oficina)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Oficina $oficina)
    {
        return view('admin.oficinas.edit', compact('oficina'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Oficina $oficina)
    {
        $oficina->nombre = $request->nombre;
        $oficina->username = $request->username;

        $oficina->save();

        return Redirect::route('admin.oficinas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Oficina $oficina)
    {
        $oficina->delete();

        return Redirect::back();
    }
}
