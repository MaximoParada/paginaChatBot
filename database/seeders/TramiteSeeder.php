<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;
use App\Models\Tramite;


class TramiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $conexiones = Categoria::where('nombre', 'Conexiones')->first();
        $facturacion = Categoria::where('nombre', 'Facturación y pagos')->first();
        $reclamos = Categoria::where('nombre', 'Reclamos')->first();
        $bajas = Categoria::where('nombre', 'Bajas y modificaciones')->first();

        Tramite::updateOrCreate(
            ['nombre' => 'Solicitar nueva conexión'],
            [
                'categoria_id' => $conexiones->id,
                'descripcion' => 'Solicitud de un nuevo suministro eléctrico.',
                'tiempo_estimado' => 'A confirmar por la empresa',
                'modalidad' => 'Presencial',
                'activo' => true
            ]
        );

        Tramite::updateOrCreate(
            ['nombre' => 'Cambio de titularidad'],
            [
                'categoria_id' => $bajas->id,
                'descripcion' => 'Cambio del titular responsable del suministro.',
                'tiempo_estimado' => 'A confirmar por la empresa',
                'modalidad' => 'Presencial',
                'activo' => true
            ]
        );

        Tramite::updateOrCreate(
            ['nombre' => 'Consultar factura'],
            [
                'categoria_id' => $facturacion->id,
                'descripcion' => 'Información sobre facturas y vencimientos.',
                'tiempo_estimado' => 'Inmediato para consultas informativas',
                'modalidad' => 'Online',
                'activo' => true
            ]
        );

        Tramite::updateOrCreate(
            ['nombre' => 'Realizar reclamo por corte'],
            [
                'categoria_id' => $reclamos->id,
                'descripcion' => 'Comunicar una interrupción del suministro eléctrico.',
                'tiempo_estimado' => 'Según evaluación de la empresa',
                'modalidad' => 'Online o telefónica',
                'activo' => true
            ]
        );
    }
}
