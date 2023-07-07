<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etiqueta extends Model
{
    use HasFactory;

    // public function incidencias()
    // {
    //     return $this->belongsToMany(Incidencia::class);
    // }

    public function incidencias()
    {
        return $this->hasMany(Incidencia::class);
    }
}
