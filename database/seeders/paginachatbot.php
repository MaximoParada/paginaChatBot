<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class paginachatbot extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. CATEGORIAS
        DB::table('categorias')->updateOrInsert(
            ['id' => 1],
            ['nombre' => 'Conexiones', 'descripcion' => 'Altas y modificaciones del servicio', 'activo' => true]
        );

        DB::table('categorias')->updateOrInsert(
            ['id' => 2],
            ['nombre' => 'Facturación y pagos', 'descripcion' => 'Consultas sobre facturas y pagos', 'activo' => true]
        );

        DB::table('categorias')->updateOrInsert(
            ['id' => 3],
            ['nombre' => 'Reclamos', 'descripcion' => 'Problemas y reclamos del servicio', 'activo' => true]
        );

        DB::table('categorias')->updateOrInsert(
            ['id' => 4],
            ['nombre' => 'Bajas y modificaciones', 'descripcion' => 'Bajas y cambios de titularidad', 'activo' => true]
        );


        // 2. TRAMITES
        DB::table('tramites')->updateOrInsert(
            ['id' => 1],
            [
                'categoria_id' => 1,
                'nombre' => 'Solicitar nueva conexión',
                'descripcion' => 'Solicitud de un nuevo suministro eléctrico.',
                'tiempo_estimado' => 'A confirmar por la empresa',
                'modalidad' => 'Presencial',
                'activo' => true
            ]
        );

        DB::table('tramites')->updateOrInsert(
            ['id' => 2],
            [
                'categoria_id' => 4,
                'nombre' => 'Cambio de titularidad',
                'descripcion' => 'Cambio del titular responsable del suministro.',
                'tiempo_estimado' => 'A confirmar por la empresa',
                'modalidad' => 'Presencial',
                'activo' => true
            ]
        );

        DB::table('tramites')->updateOrInsert(
            ['id' => 3],
            [
                'categoria_id' => 2,
                'nombre' => 'Consultar factura',
                'descripcion' => 'Información sobre facturas y vencimientos.',
                'tiempo_estimado' => 'Inmediato para consultas informativas',
                'modalidad' => 'Online',
                'activo' => true
            ]
        );

        DB::table('tramites')->updateOrInsert(
            ['id' => 4],
            [
                'categoria_id' => 3,
                'nombre' => 'Realizar reclamo por corte',
                'descripcion' => 'Comunicar una interrupción del suministro eléctrico.',
                'tiempo_estimado' => 'Según evaluación de la empresa',
                'modalidad' => 'Online o telefónica',
                'activo' => true
            ]
        );


        // 3. REQUISITOS
        $requisitos = [
            ['id' => 1, 'tramite_id' => 1, 'descripcion' => 'DNI del solicitante.'],
            ['id' => 2, 'tramite_id' => 1, 'descripcion' => 'Documentación que acredite la ocupación del inmueble.'],
            ['id' => 3, 'tramite_id' => 1, 'descripcion' => 'Dirección del lugar donde se solicita la conexión.'],
            ['id' => 4, 'tramite_id' => 2, 'descripcion' => 'DNI del nuevo titular.'],
            ['id' => 5, 'tramite_id' => 2, 'descripcion' => 'Número de suministro eléctrico.'],
            ['id' => 6, 'tramite_id' => 2, 'descripcion' => 'Documentación que acredite la relación con el inmueble.'],
        ];

        foreach ($requisitos as $requisito) {
            DB::table('requisitos')->updateOrInsert(
                ['id' => $requisito['id']],
                $requisito
            );
        }


        // 4. PASOS DE LOS TRAMITES
        $pasos = [
            ['id' => 1, 'tramite_id' => 1, 'numero' => 1, 'descripcion' => 'Reunir la documentación necesaria.'],
            ['id' => 2, 'tramite_id' => 1, 'numero' => 2, 'descripcion' => 'Contactar con la empresa para iniciar la solicitud.'],
            ['id' => 3, 'tramite_id' => 1, 'numero' => 3, 'descripcion' => 'Presentar la documentación solicitada.'],
            ['id' => 4, 'tramite_id' => 1, 'numero' => 4, 'descripcion' => 'Esperar la evaluación de la solicitud.'],
            ['id' => 5, 'tramite_id' => 2, 'numero' => 1, 'descripcion' => 'Reunir el DNI y la documentación del inmueble.'],
            ['id' => 6, 'tramite_id' => 2, 'numero' => 2, 'descripcion' => 'Identificar el número de suministro.'],
            ['id' => 7, 'tramite_id' => 2, 'numero' => 3, 'descripcion' => 'Presentar la solicitud de cambio de titularidad.'],
            ['id' => 8, 'tramite_id' => 2, 'numero' => 4, 'descripcion' => 'Esperar la confirmación de la empresa.'],
        ];

        foreach ($pasos as $paso) {
            DB::table('pasos_tramite')->updateOrInsert(
                ['id' => $paso['id']],
                $paso
            );
        }


        // 5. PREGUNTAS FRECUENTES
        $preguntas = [
            [
                'id' => 1,
                'tramite_id' => 1,
                'pregunta' => '¿Cómo solicito una nueva conexión?',
                'respuesta' => 'Debés reunir la documentación necesaria y comunicarte con la empresa para iniciar la solicitud.'
            ],
            [
                'id' => 2,
                'tramite_id' => 2,
                'pregunta' => '¿Cómo cambio la titularidad?',
                'respuesta' => 'Debés presentar tu DNI, el número de suministro y la documentación correspondiente al inmueble.'
            ],
            [
                'id' => 3,
                'tramite_id' => 3,
                'pregunta' => '¿Cómo puedo consultar mi factura?',
                'respuesta' => 'Podés consultar tus facturas a través de los canales digitales de atención de la empresa.'
            ],
            [
                'id' => 4,
                'tramite_id' => null,
                'pregunta' => '¿Cuál es el horario de atención?',
                'respuesta' => 'El horario de atención de las oficinas es de lunes a viernes de 8 a 13 hs. Consultá la información de cada oficina antes de concurrir.'
            ],
        ];

        foreach ($preguntas as $pregunta) {
            $pregunta['activo'] = true;

            DB::table('preguntas_frecuentes')->updateOrInsert(
                ['id' => $pregunta['id']],
                $pregunta
            );
        }


        // 6. OFICINAS
        DB::table('oficinas')->updateOrInsert(
            ['id' => 1],
            [
                'nombre' => 'Oficina Central',
                'direccion' => 'Av. Principal 123',
                'telefono' => '299000000',
                'email' => 'central@electroasiste.com',
                'horario' => 'Lunes a viernes de 8 a 13 hs',
                'activo' => true
            ]
        );

        DB::table('oficinas')->updateOrInsert(
            ['id' => 2],
            [
                'nombre' => 'Oficina Norte',
                'direccion' => 'Calle 456',
                'telefono' => '299000001',
                'email' => 'norte@electroasiste.com',
                'horario' => 'Lunes a viernes de 8 a 13 hs',
                'activo' => true
            ]
        );
    }
}
