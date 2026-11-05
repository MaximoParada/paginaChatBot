<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Tramite;

class TramiteController extends Controller
{
    // Mostrar el listado principal de servicios usando la vista 'servicio' o 'inicio'
    public function index()
    {
        $categorias = Categoria::where('activo', true)->get();

        return view('pagina.servicios', compact('categorias'));
    }

    // Mostrar una categoría específica
    public function porCategoria($id)
    {
        $categoria = Categoria::with('tramites')->findOrFail($id);

        return view('pagina.servicios', compact('categoria'));
    }

    // Mostrar el detalle del servicio/trámite
    public function detalle($id)
    {
        $tramite = Tramite::with([
            'categoria',
            'requisitos',
            'pasos' => function ($query) {
                        $query->orderBy('numero');
                    }
        ])->findOrFail($id);

        return view('pagina.servicios', compact('tramite'));
    }
}