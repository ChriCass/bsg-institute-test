<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $fillable = ['descripcion', 'hora_inicio', 'hora_fin'];

    public function asignaciones()
    {
        return $this->hasMany(AsignacionHorario::class);
    }
}
