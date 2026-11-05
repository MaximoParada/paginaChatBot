<?php

use Illuminate\Support\Facades\Route;

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