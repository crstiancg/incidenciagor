<?php

namespace App\Http\Controllers;

use App\Models\rc;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RolesController extends Controller
{
    
    public function index()
    {
        $roles = Role::all();

        return view('admin.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $rol)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $rol)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $rol)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $rol)
    {
        //
    }
}
