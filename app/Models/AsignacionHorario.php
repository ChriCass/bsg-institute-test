<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsignacionHorario extends Model
{
    protected $fillable = ['personal_id', 'horario_id', 'fecha'];

    public function personal()
    {
        return $this->belongsTo(Personal::class);
    }

    public function horario()
    {
        return $this->belongsTo(Horario::class);
    }
}
