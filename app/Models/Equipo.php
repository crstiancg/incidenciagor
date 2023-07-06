<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    public function tipo()
    {
        return $this->belongsTo(Tipo::class);
    }

    public function oficina()
    {
        return $this->belongsTo(Oficina::class);
    }
    
    public function indicencias()
    {
        return $this->hasMany(Incidencia::class);
    }

    
}
