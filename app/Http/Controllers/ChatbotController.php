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

    // Obtener la respuesta de una pregunta por ID
    public function responder($id)
    {
        $pregunta = PreguntaFrecuente::where('activo', true)
            ->findOrFail($id);

        return response()->json([
            'pregunta' => $pregunta->pregunta,
            'respuesta' => $pregunta->respuesta
        ]);
    }

    // NUEVO: Método que atiende el chat de Foqui desde el JavaScript
    public function consultar(Request $request)
    {
        $valor = $request->input('consulta');

        // Respuestas automáticas según el botón que presionó el usuario
        $textoRespuesta = match ($valor) {
            'facturacion' => 'Para ver tus facturas, ingresa a la sección de servicios o consulta tu último recibo.',
            'corte' => 'Puedes reportar un corte comunicándote con nuestras oficinas o desde la central.',
            'conexion' => 'Las nuevas conexiones se solicitan completando el formulario correspondiente.',
            'agente' => 'Un representante del servicio eléctrico se comunicará contigo en breve.',
            default => 'Entendido, procesando tu solicitud sobre: ' . $valor,
        };

        // Devuelve exactamente el JSON con la clave 'respuesta' que busca el JS
        return response()->json([
            'respuesta' => $textoRespuesta
        ]);
    }
}