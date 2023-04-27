<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormularioDatos extends Controller
{
    public function enviarFormulario(Request $request)
    {
        $reglas = [
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'edad' => 'required|int',
            'email' => 'required|email',
            'direccion' => 'required|string',
            'fechaNacimiento' => 'required|date',
            // Agrega más reglas de validación aquí si lo necesitas
        ];
        
        $mensajes = [
            'nombre.required' => 'El campo nombre es obligatorio.',
            'nombre.string' => 'El campo nombre debe ser una cadena de caracteres.',
            'apellido.required' => 'El campo apellido es obligatorio.',
            'apellido.string' => 'El campo apellido debe ser una cadena de caracteres.',
            'edad.required' => 'El campo edad es obligatorio.',
            'edad.numeric' => 'El campo edad debe ser un número.',
            'email.required' => 'El campo correo electrónico es obligatorio.',
            'email.email' => 'El correo electrónico debe ser una dirección de correo electrónico válida.',
            'direccion.required' => 'El campo dirección es obligatorio.',
            'fechaNacimiento.required' => 'El campo fecha es obligatorio.',
            'fechaNacimiento.date' => 'El campo fecha de nacimiento debe ser una fecha válida.',
            
            // Agrega más mensajes de error aquí si lo necesitas
        ];
        
        $validator = Validator::make($request->all(), $reglas, $mensajes);
        
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        $nombre = $request->old('nombre', $request->input('nombre'));
        session()->flash('nombre', old('nombre', $nombre));


        $email = $request->old('email', $request->input('email'));
        session()->flash('email', old('email', $email));

        $edad = $request->old('edad', $request->input('edad'));
        session()->flash('edad', old('edad', $edad));

        $apellido = $request->old('apellido', $request->input('apellido'));
        session()->flash('apellido', old('apellido', $apellido));
     
        $direccion = $request->old('direccion', $request->input('direccion'));
        session()->flash('direccion', old('direccion', $direccion));
      
        $fechaNacimiento = $request->old('fechaNacimiento', $request->input('fechaNacimiento'));
        session()->flash('fechaNacimiento', old('fechaNacimiento', $fechaNacimiento));
        
        return redirect()->route('mostrarDatos');
    }
}

