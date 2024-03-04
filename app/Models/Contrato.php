<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $fillable = ['personal_id', 'tipo_contrato', 'fecha_inicio', 'fecha_fin', 'salario', 'estado'];

    public function personal()
    {
        return $this->belongsTo(Personal::class);
    }

    public function detalles()
    {
        return $this->hasMany(DetalleContrato::class);
    }
}
