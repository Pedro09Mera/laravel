<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MensajeControlador;
use App\Http\Controllers\FormularioDatos;
use Illuminate\Support\Facades\DB;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('prueba') . view('welcome');
//});

Route::get('/', function () {
    return view('mensaje1') . view('formulario1');
});

Route::post('/enviar-mensaje', [MensajeControlador::class, 'enviarMensaje'])->name('enviarMensaje');

Route::post('/enviar-formulario', [FormularioDatos::class, 'enviarFormulario'])->name('enviarFormulario');

Route::get('/mostrar-mensaje', function () {
    return view('mensaje2');
})->name('mostrarMensaje');

Route::get('/mostrar-datos', function () {
    return view('formulario2');
})->name('mostrarDatos');
