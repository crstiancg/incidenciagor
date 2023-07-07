<?php

namespace App\Http\Controllers;

use App\Models\Etiqueta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EtiquetaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etiquetas = Etiqueta::all();

        return view('admin.etiquetas.index', compact('etiquetas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.etiquetas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $etiqueta = new Etiqueta();

        $etiqueta->nombre = $request->nombre;

        $etiqueta->save();

        return Redirect::route('admin.etiquetas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Etiqueta $etiqueta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etiqueta $etiqueta)
    {
        return view('admin.etiquetas.edit', compact('etiqueta'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Etiqueta $etiqueta)
    {
        $etiqueta->nombre = $request->nombre;

        $etiqueta->save();

        return Redirect::route('admin.etiquetas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etiqueta $etiqueta)
    {
        $etiqueta->delete();
        
        return Redirect::route('admin.etiquetas.index');

    }
}
