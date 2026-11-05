<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\OficinaController;
use App\Http\Controllers\TramiteController;
<<<<<<< HEAD
use App\Http\Controllers\ChatbotController;

Route::post('/api/chatbot-consulta', [ChatbotController::class, 'responder']);
=======
use App\Http\Controllers\ChatbotController; // Asegúrate de usar el nombre real de tu controlador de chat
>>>>>>> c0cb66dec9e4262fbee9317e6b956ae6e618b2eb

Route::post('/chatbot-consulta', [ChatbotController::class, 'consultar']);

// Ruta para el Chatbot
Route::view('/chatbot', 'estructura');

// 1. Página de Inicio (Usa InicioController)
Route::get('/', [InicioController::class, 'index'])->name('inicio');

// 2. Página de Oficina Virtual (Usa OficinaController)
Route::get('/oficina', [OficinaController::class, 'index'])->name('oficina');

<<<<<<< HEAD
// 2. Ruta para Oficina Virtual
Route::get('/oficina', function () {
    return view('pagina.oficina');
})->name('oficina');

// 3. Ruta para Servicios
Route::get('/servicios', function () {
    return view('pagina.servicios');
})->name('servicios');


=======
// 3. Página de Servicios (Usa TramiteController)
Route::get('/servicios', [TramiteController::class, 'index'])->name('servicios');
>>>>>>> c0cb66dec9e4262fbee9317e6b956ae6e618b2eb
