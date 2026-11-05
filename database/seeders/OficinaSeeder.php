<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Oficina;

class OficinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Oficina::updateOrCreate(
            ['nombre' => 'Oficina Central'],
            [
                'direccion' => 'Av. Principal 123',
                'telefono' => '299000000',
                'email' => 'central@electroasiste.com',
                'horario' => 'Lunes a viernes de 8 a 13 hs',
                'activo' => true
            ]
        );

        Oficina::updateOrCreate(
            ['nombre' => 'Oficina Norte'],
            [
                'direccion' => 'Calle 456',
                'telefono' => '299000001',
                'email' => 'norte@electroasiste.com',
                'horario' => 'Lunes a viernes de 8 a 13 hs',
                'activo' => true
            ]
        );
    }
}
