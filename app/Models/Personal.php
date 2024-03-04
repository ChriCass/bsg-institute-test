<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{   
    protected $table = 'personal'; // Especifica el nombre de la tabla aquí
    protected $fillable = ['nombre', 'apellido', 'dni', 'fecha_nacimiento', 'direccion', 'estado'];
    
    public function contactos()
    {
        return $this->hasMany(Contacto::class);
    }

    public function contratos()
    {
        return $this->hasMany(Contrato::class);
    }

    public function asignacionesHorarios()
    {
        return $this->hasMany(AsignacionHorario::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
