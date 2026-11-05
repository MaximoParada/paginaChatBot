<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\OficinaController;
use App\Http\Controllers\TramiteController;
use App\Http\Controllers\ChatbotController; // Asegúrate de usar el nombre real de tu controlador de chat

Route::post('/chatbot-consulta', [ChatbotController::class, 'consultar']);

// Ruta para el Chatbot
Route::view('/chatbot', 'estructura');

// 1. Página de Inicio (Usa InicioController)
Route::get('/', [InicioController::class, 'index'])->name('inicio');

// 2. Página de Oficina Virtual (Usa OficinaController)
Route::get('/oficina', [OficinaController::class, 'index'])->name('oficina');

// 3. Página de Servicios (Usa TramiteController)
Route::get('/servicios', [TramiteController::class, 'index'])->name('servicios');