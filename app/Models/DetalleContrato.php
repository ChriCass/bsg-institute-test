<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleContrato extends Model
{
    protected $fillable = ['contrato_id', 'tipo', 'descripcion'];

    public function contrato()
    {
        return $this->belongsTo(Contrato::class);
    }
}
