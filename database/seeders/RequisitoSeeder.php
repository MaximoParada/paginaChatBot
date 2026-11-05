<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tramite;
use App\Models\Requisito;


class RequisitoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $conexion = Tramite::where('nombre', 'Solicitar nueva conexión')->first();
        $titularidad = Tramite::where('nombre', 'Cambio de titularidad')->first();

        $requisitos = [
            [$conexion->id, 'DNI del solicitante.'],
            [$conexion->id, 'Documentación que acredite la ocupación del inmueble.'],
            [$conexion->id, 'Dirección del lugar donde se solicita la conexión.'],
            [$titularidad->id, 'DNI del nuevo titular.'],
            [$titularidad->id, 'Número de suministro eléctrico.'],
            [$titularidad->id, 'Documentación que acredite la relación con el inmueble.'],
        ];

        foreach ($requisitos as $dato) {
            Requisito::updateOrCreate(
                [
                    'tramite_id' => $dato[0],
                    'descripcion' => $dato[1]
                ],
                []
            );
        }
    }
}
