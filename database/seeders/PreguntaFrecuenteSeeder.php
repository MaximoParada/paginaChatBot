<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tramite;
use App\Models\PreguntaFrecuente;


class PreguntaFrecuenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $conexion = Tramite::where('nombre', 'Solicitar nueva conexión')->first();
        $titularidad = Tramite::where('nombre', 'Cambio de titularidad')->first();
        $factura = Tramite::where('nombre', 'Consultar factura')->first();

        $preguntas = [
            [
                $conexion->id,
                '¿Cómo solicito una nueva conexión?',
                'Debés reunir la documentación necesaria y comunicarte con la empresa para iniciar la solicitud.'
            ],
            [
                $titularidad->id,
                '¿Cómo cambio la titularidad?',
                'Debés presentar tu DNI, el número de suministro y la documentación correspondiente al inmueble.'
            ],
            [
                $factura->id,
                '¿Cómo puedo consultar mi factura?',
                'Podés consultar tus facturas a través de los canales digitales de atención de la empresa.'
            ],
            [
                null,
                '¿Cuál es el horario de atención?',
                'Las oficinas atienden de lunes a viernes de 8 a 13 hs. Consultá los horarios de cada sucursal.'
            ],
        ];

        foreach ($preguntas as $dato) {
            PreguntaFrecuente::updateOrCreate(
                ['pregunta' => $dato[1]],
                [
                    'tramite_id' => $dato[0],
                    'respuesta' => $dato[2],
                    'activo' => true
                ]
            );
        }
    }
}
