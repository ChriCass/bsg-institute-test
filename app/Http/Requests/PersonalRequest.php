<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class PersonalRequest extends FormRequest
{
    public function authorize()
    {
        return Auth::check(); // Asegúrate de que el usuario esté autenticado
    }

    public function rules()
    {
        $rules = [
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'fecha_nacimiento' => 'required|date',
            'direccion' => 'required|string|max:255',
            'estado' => 'required|in:activo,cesado',
        ];

        if ($this->isMethod('post')) {
            // Reglas específicas para la creación
            $rules['dni'] = 'required|string|max:20|unique:personal,dni';
        } else if ($this->isMethod('put')) {
            // Reglas específicas para la actualización
            // Asume que 'dni' es un campo en tu formulario de actualización
            $rules['dni'] = ['required', 'string', 'max:20', Rule::unique('personal')->ignore($this->personal)];
        }

        return $rules;
    }
}

