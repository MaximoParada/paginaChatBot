<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
   // return view('welcome');});
Route::view('/chatbot', 'estructura');

use App\Http\Controllers\InicioController;
use App\Http\Controllers\OficinaController;
use App\Http\Controllers\TramiteController;
use App\Http\Controllers\ChatbotController;

Route::post('/api/chatbot-consulta', [ChatbotController::class, 'responder']);

Route::get('/', [InicioController::class, 'index'])
    ->name('inicio');

Route::get('/oficina', [OficinaController::class, 'index'])
    ->name('oficina');

Route::get('/servicios', [TramiteController::class, 'index'])
    ->name('servicios');

// 1. Ruta para Inicio
Route::get('/', function () {
    return view('pagina.inicio');
})->name('inicio');

// 2. Ruta para Oficina Virtual
Route::get('/oficina', function () {
    return view('pagina.oficina');
})->name('oficina');

// 3. Ruta para Servicios
Route::get('/servicios', function () {
    return view('pagina.servicios');
})->name('servicios');


