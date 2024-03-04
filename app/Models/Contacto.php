<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $fillable = ['personal_id', 'tipo', 'valor'];

    public function personal()
    {
        return $this->belongsTo(Personal::class);
    }
}
