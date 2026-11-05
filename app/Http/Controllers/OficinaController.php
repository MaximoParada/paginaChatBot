<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oficina;
//cont
class OficinaController extends Controller
{
    public function index()
    {
        $oficinas = Oficina::where('activo', true)->get();

        return view('oficinas', compact('oficinas'));
    }
}
