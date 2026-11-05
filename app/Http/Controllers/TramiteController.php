<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Tramite;

class TramiteController extends Controller
{
    // Mostrar todas las categorias
    public function index()
    {
        $categorias = Categoria::where('activo', true)->get();

        return view('tramites.index', compact('categorias'));
    }

    // Mostrar los tramites de una categoria
    public function porCategoria($id)
    {
        $categoria = Categoria::with('tramites')->findOrFail($id);

        return view('tramites.categoria', compact('categoria'));
    }

    // Mostrar el detalle de un tramite
    public function detalle($id)
    {
        $tramite = Tramite::with([
            'categoria',
            'requisitos',
            'pasos' => function ($query) {
                            $query->orderBy('numero');
                        }
        ])->findOrFail($id);

        return view('tramites.detalle', compact('tramite'));
    }
}
