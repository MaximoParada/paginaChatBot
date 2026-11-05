<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tramite;
use App\Models\PasoTramite;

class PasoTramiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $conexion = Tramite::where('nombre', 'Solicitar nueva conexión')->first();
        $titularidad = Tramite::where('nombre', 'Cambio de titularidad')->first();

        $pasos = [
            [$conexion->id, 1, 'Reunir la documentación necesaria.'],
            [$conexion->id, 2, 'Contactar con la empresa para iniciar la solicitud.'],
            [$conexion->id, 3, 'Presentar la documentación solicitada.'],
            [$conexion->id, 4, 'Esperar la evaluación de la solicitud.'],
            [$titularidad->id, 1, 'Reunir el DNI y la documentación del inmueble.'],
            [$titularidad->id, 2, 'Identificar el número de suministro.'],
            [$titularidad->id, 3, 'Presentar la solicitud de cambio de titularidad.'],
            [$titularidad->id, 4, 'Esperar la confirmación de la empresa.'],
        ];

        foreach ($pasos as $dato) {
            PasoTramite::updateOrCreate(
                [
                    'tramite_id' => $dato[0],
                    'numero' => $dato[1]
                ],
                [
                    'descripcion' => $dato[2]
                ]
            );
        }
    }
}
