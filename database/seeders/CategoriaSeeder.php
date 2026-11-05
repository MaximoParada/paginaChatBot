<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;


class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Categoria::updateOrCreate(
            ['nombre' => 'Conexiones'],
            ['descripcion' => 'Altas y modificaciones del servicio', 'activo' => true]
        );

        Categoria::updateOrCreate(
            ['nombre' => 'Facturación y pagos'],
            ['descripcion' => 'Consultas sobre facturas y pagos', 'activo' => true]
        );

        Categoria::updateOrCreate(
            ['nombre' => 'Reclamos'],
            ['descripcion' => 'Problemas y reclamos del servicio', 'activo' => true]
        );

        Categoria::updateOrCreate(
            ['nombre' => 'Bajas y modificaciones'],
            ['descripcion' => 'Bajas y cambios de titularidad', 'activo' => true]
        );
    }
}
