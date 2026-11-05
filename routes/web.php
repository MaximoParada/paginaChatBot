<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
   // return view('welcome');});
Route::view('/chatbot', 'estructura');

use App\Http\Controllers\InicioController;
use App\Http\Controllers\OficinaController;
use App\Http\Controllers\TramiteController;

Route::get('/', [InicioController::class, 'index'])
    ->name('inicio');

Route::get('/oficina', [OficinaController::class, 'index'])
    ->name('oficina');

Route::get('/servicios', [TramiteController::class, 'index'])
    ->name('servicios');