<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PreguntaFrecuente;


class ChatbotController extends Controller
{
    // Mostrar las preguntas disponibles
    public function preguntas()
    {
        $preguntas = PreguntaFrecuente::where('activo', true)->get();

        return response()->json($preguntas);
    }

    // Obtener la respuesta de una pregunta
    public function responder($id)
    {
        $pregunta = PreguntaFrecuente::where('activo', true)
            ->findOrFail($id);

        return response()->json([
            'pregunta' => $pregunta->pregunta,
            'respuesta' => $pregunta->respuesta
        ]);
    }
}
