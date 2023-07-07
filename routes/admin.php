<?php

use App\Http\Controllers\EquipoController;
use App\Http\Controllers\EtiquetaController;
use App\Http\Controllers\HistorialController;
use App\Http\Controllers\IncidenciaController;
use App\Http\Controllers\OficinaController;
use App\Http\Controllers\TipoController;
use Illuminate\Support\Facades\Route;



Route::get('/', function(){
    return view('admin.dashboard');
})->name('dashboard');

Route::resource('tipos', TipoController::class);
Route::resource('equipos', EquipoController::class);
Route::resource('oficinas', OficinaController::class);
Route::resource('incidencias', IncidenciaController::class);
Route::resource('historial', HistorialController::class);
Route::resource('etiquetas', EtiquetaController::class);