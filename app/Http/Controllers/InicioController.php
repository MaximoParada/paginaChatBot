<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//cont
class InicioController extends Controller
{
    public function index()
    {
        return view('inicio');
    }
}
