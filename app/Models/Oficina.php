<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oficina extends Model
{
    use HasFactory;

    public function equipos()
    {
        return $this->hasMany(Equipo::class);
    }

    public function incidencias()
    {
        return $this->hasMany(Incidencia::class);
    }
}
