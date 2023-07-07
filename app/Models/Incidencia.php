<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model
{
    use HasFactory;

    public function equipo()
    {
        return $this->belongsTo(Equipo::class);
    }

    public function oficina()
    {
        return $this->belongsTo(Oficina::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function historiales()
    {
        return $this->hasMany(Historial::class);
    }

    // public function etiquetas()
    // {
    //     return $this->belongsToMany(Etiqueta::class);
    // }

    public function etiqueta()
    {
        return $this->belongsToMany(Etiqueta::class);
    }
}
