<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MensajeControlador extends Controller
{
    public function enviarMensaje(Request $request)
    {
        $mensaje = $request->input('mensaje');
        session()->flash('mensaje', $mensaje);
        return redirect()->route('mostrarMensaje');
    }
}
