<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PreguntaFrecuente;

class ChatbotController extends Controller
{
    /**
     * Devuelve todas las preguntas activas
     */
    public function preguntas()
    {
        $preguntas = PreguntaFrecuente::where('activo', true)->get();

        return response()->json($preguntas);
    }

    /**
     * Busca la respuesta en la base de datos mediante Eloquent
     */
    public function responder(Request $request)
    {
        $consulta = trim($request->input('consulta'));

        // 1. Si el envío es un ID numérico directo
        if (is_numeric($consulta)) {
            $faq = PreguntaFrecuente::where('activo', true)->find($consulta);

            if ($faq) {
                return response()->json([
                    'respuesta' => $faq->respuesta
                ]);
            }
        }

        // 2. Búsqueda con Eloquent en la tabla preguntas_frecuentes
        $faq = PreguntaFrecuente::where('activo', true)
            ->where(function($q) use ($consulta) {
                $q->where('pregunta', 'LIKE', "%{$consulta}%")
                  ->orWhere('respuesta', 'LIKE', "%{$consulta}%");
            })
            ->first();

        if ($faq) {
            return response()->json([
                'respuesta' => $faq->respuesta
            ]);
        }

        // 3. Respuestas de respaldo en caso de no coincidir en la BD
        $respuestasFijas = [
            'facturacion' => 'Podés consultar y descargar tu factura actualizada ingresando a la sección Oficina Virtual con tu número de socio.',
            'corte'       => 'Para reportar una interrupción del servicio o ver los cortes programados, ingresá a la sección Cortes Programados o llamá al 0800-EE-LOCAL.',
            'conexion'    => 'Para solicitar un nuevo medidor necesitás: DNI, título de propiedad o contrato de alquiler, y la certificación de la instalación eléctrica.',
            'agente'      => 'Te estamos derivando con un representante de atención al cliente. Nuestro horario es de Lun. a Vie. de 8:00 a 16:00 hs.'
        ];

        if (array_key_exists($consulta, $respuestasFijas)) {
            return response()->json([
                'respuesta' => $respuestasFijas[$consulta]
            ]);
        }

        return response()->json([
            'respuesta' => 'No encontré información exacta sobre tu consulta en la base de datos. ¿Querés intentar con otra opción?'
        ]);
    }
}