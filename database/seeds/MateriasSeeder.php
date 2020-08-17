<?php

use Illuminate\Database\Seeder;
use App\Materia;


class MateriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1er año
        Materia::create([
            'nombre_materia'                => 'Castellano',
            'descripcion_materia'           => 'Lenguaje y Comunicacion',
            'pensum_id'                     => 1,
            'periodo_id'                    => 1,
            'role_user_id'                  => 3,
        ]);

        Materia::create([
            'nombre_materia'                => 'Ingles',
            'descripcion_materia'           => 'Aprender otro idioma',
            'pensum_id'                     => 1,
            'periodo_id'                    => 1,
            'role_user_id'                  => 3,
        ]);

        Materia::create([
            'nombre_materia'                => 'Matematica',
            'descripcion_materia'           => 'Matematica',
            'pensum_id'                     => 1,
            'periodo_id'                    => 1,
            'role_user_id'                  => 3,
        ]);

        Materia::create([
            'nombre_materia'                => 'Estudios de la Naturaleza',
            'descripcion_materia'           => 'Estudios de la Naturaleza',
            'pensum_id'                     => 1,
            'periodo_id'                    => 1,
            'role_user_id'                  => 3,
        ]);

        Materia::create([
            'nombre_materia'                => 'Historia de Venezuela',
            'descripcion_materia'           => 'Historia de Venezuela',
            'pensum_id'                     => 1,
            'periodo_id'                    => 1,
            'role_user_id'                  => 3,
        ]);

        Materia::create([
            'nombre_materia'                => 'Ed. Familiar y Ciudadana',
            'descripcion_materia'           => 'Educacion Familiar y Ciudadana',
            'pensum_id'                     => 1,
            'periodo_id'                    => 1,
            'role_user_id'                  => 3,
        ]);

        Materia::create([
            'nombre_materia'                => 'Geografia General',
            'descripcion_materia'           => 'Geografia General',
            'pensum_id'                     => 1,
            'periodo_id'                    => 1,
            'role_user_id'                  => 3,
        ]);

        Materia::create([
            'nombre_materia'                => 'Educacion Artistica',
            'descripcion_materia'           => 'Educacion Artistica',
            'pensum_id'                     => 1,
            'periodo_id'                    => 1,
            'role_user_id'                  => 3,
        ]);

        Materia::create([
            'nombre_materia'                => 'Educacion Fisica y Deporte',
            'descripcion_materia'           => 'Educacion Fisica y Deporte',
            'pensum_id'                     => 1,
            'periodo_id'                    => 1,
            'role_user_id'                  => 3,
        ]);

        Materia::create([
            'nombre_materia'                => 'Educacion Para el trabajo',
            'descripcion_materia'           => 'Educacion Para el trabajo',
            'pensum_id'                     => 1,
            'periodo_id'                    => 1,
            'role_user_id'                  => 3,
        ]);
        // 1er año

        // 2do año

        Materia::create([
            'nombre_materia'                => 'Castellano',
            'descripcion_materia'           => 'Lenguaje y Comunicacion',
            'pensum_id'                     => 2,
            'periodo_id'                    => 1,
            'role_user_id'                  => 3,
        ]);

        Materia::create([
            'nombre_materia'                => 'Ingles',
            'descripcion_materia'           => 'Aprender otro idioma',
            'pensum_id'                     => 2,
            'periodo_id'                    => 1,
            'role_user_id'                  => 3,
        ]);

        Materia::create([
            'nombre_materia'                => 'Matematica',
            'descripcion_materia'           => 'Matematica',
            'pensum_id'                     => 2,
            'periodo_id'                    => 1,
            'role_user_id'                  => 3,
        ]);

        Materia::create([
            'nombre_materia'                => 'Educacion Artistica',
            'descripcion_materia'           => 'Educacion Artistica',
            'pensum_id'                     => 2,
            'periodo_id'                    => 1,
            'role_user_id'                  => 3,
        ]);

        Materia::create([
            'nombre_materia'                => 'Educacion Fisica y Deporte',
            'descripcion_materia'           => 'Educacion Fisica y Deporte',
            'pensum_id'                     => 2,
            'periodo_id'                    => 1,
            'role_user_id'                  => 3,
        ]);

        Materia::create([
            'nombre_materia'                => 'Educacion Para el trabajo',
            'descripcion_materia'           => 'Educacion Para el trabajo',
            'pensum_id'                     => 2,
            'periodo_id'                    => 1,
            'role_user_id'                  => 3,
        ]);

        Materia::create([
            'nombre_materia'                => 'Historia de Venezuela',
            'descripcion_materia'           => 'Historia de Venezuela',
            'pensum_id'                     => 2,
            'periodo_id'                    => 1,
            'role_user_id'                  => 3,
        ]);

        Materia::create([
            'nombre_materia'                => 'Historia de Universal',
            'descripcion_materia'           => 'Historia de Universal',
            'pensum_id'                     => 2,
            'periodo_id'                    => 1,
            'role_user_id'                  => 3,
        ]);

        Materia::create([
            'nombre_materia'                => 'Ciencias Biologicas',
            'descripcion_materia'           => 'Ciencias Biologicas',
            'pensum_id'                     => 2,
            'periodo_id'                    => 1,
            'role_user_id'                  => 3,
        ]);

        Materia::create([
            'nombre_materia'                => 'Educacion para la Salud',
            'descripcion_materia'           => 'Educacion para la Salud',
            'pensum_id'                     => 2,
            'periodo_id'                    => 1,
            'role_user_id'                  => 3,
        ]);

        // 2do año

        // 3er año
        Materia::create([
            'nombre_materia'                => 'Castellano',
            'descripcion_materia'           => 'Lenguaje y Comunicacion',
            'pensum_id'                     => 3,
            'periodo_id'                    => 1,
            'role_user_id'                  => 3,
        ]);

        Materia::create([
            'nombre_materia'                => 'Ingles',
            'descripcion_materia'           => 'Aprender otro idioma',
            'pensum_id'                     => 3,
            'periodo_id'                    => 1,
            'role_user_id'                  => 3,
        ]);

        Materia::create([
            'nombre_materia'                => 'Matematica',
            'descripcion_materia'           => 'Matematica',
            'pensum_id'                     => 3,
            'periodo_id'                    => 1,
            'role_user_id'                  => 3,
        ]);

        Materia::create([
            'nombre_materia'                => 'Ciencias Biologicas',
            'descripcion_materia'           => 'Ciencias Biologicas',
            'pensum_id'                     => 3,
            'periodo_id'                    => 1,
            'role_user_id'                  => 3,
        ]);

        Materia::create([
            'nombre_materia'                => 'Educacion Fisica y Deporte',
            'descripcion_materia'           => 'Educacion Fisica y Deporte',
            'pensum_id'                     => 3,
            'periodo_id'                    => 1,
            'role_user_id'                  => 3,
        ]);

        Materia::create([
            'nombre_materia'                => 'Educacion Para el trabajo',
            'descripcion_materia'           => 'Educacion Para el trabajo',
            'pensum_id'                     => 3,
            'periodo_id'                    => 1,
            'role_user_id'                  => 3,
        ]);

        Materia::create([
            'nombre_materia'                => 'Historia de Venezuela',
            'descripcion_materia'           => 'Historia de Venezuela',
            'pensum_id'                     => 3,
            'periodo_id'                    => 1,
            'role_user_id'                  => 3,
        ]);

        Materia::create([
            'nombre_materia'                => 'Geografia de Venezuela',
            'descripcion_materia'           => 'Geografia de Venezuela',
            'pensum_id'                     => 3,
            'periodo_id'                    => 1,
            'role_user_id'                  => 3,
        ]);

        Materia::create([
            'nombre_materia'                => 'Fisica',
            'descripcion_materia'           => 'Fisica',
            'pensum_id'                     => 3,
            'periodo_id'                    => 1,
            'role_user_id'                  => 3,
        ]);

        Materia::create([
            'nombre_materia'                => 'Quimica',
            'descripcion_materia'           => 'Quimica',
            'pensum_id'                     => 3,
            'periodo_id'                    => 1,
            'role_user_id'                  => 3,
        ]);
        // 3er año

        
        // 4to año
        Materia::create([
            'nombre_materia'                => 'Castellano',
            'descripcion_materia'           => 'Lenguaje y Comunicacion',
            'pensum_id'                     => 4,
            'periodo_id'                    => 1,
            'role_user_id'                  => 3,
        ]);

        Materia::create([
            'nombre_materia'                => 'Ingles',
            'descripcion_materia'           => 'Aprender otro idioma',
            'pensum_id'                     => 4,
            'periodo_id'                    => 1,
            'role_user_id'                  => 3,
        ]);

        Materia::create([
            'nombre_materia'                => 'Matematica',
            'descripcion_materia'           => 'Matematica',
            'pensum_id'                     => 4,
            'periodo_id'                    => 1,
            'role_user_id'                  => 3,
        ]);

        Materia::create([
            'nombre_materia'                => 'Historia de Venezuela',
            'descripcion_materia'           => 'Historia de Venezuela',
            'pensum_id'                     => 4,
            'periodo_id'                    => 1,
            'role_user_id'                  => 3,
        ]);

        Materia::create([
            'nombre_materia'                => 'Fisica',
            'descripcion_materia'           => 'Fisica',
            'pensum_id'                     => 4,
            'periodo_id'                    => 1,
            'role_user_id'                  => 3,
        ]);

        Materia::create([
            'nombre_materia'                => 'Quimica',
            'descripcion_materia'           => 'Quimica',
            'pensum_id'                     => 4,
            'periodo_id'                    => 1,
            'role_user_id'                  => 3,
        ]);

        Materia::create([
            'nombre_materia'                => 'Educacion Fisica y Deporte',
            'descripcion_materia'           => 'Educacion Fisica y Deporte',
            'pensum_id'                     => 4,
            'periodo_id'                    => 1,
            'role_user_id'                  => 3,
        ]);

        Materia::create([
            'nombre_materia'                => 'Ciencias Biologicas',
            'descripcion_materia'           => 'Ciencias Biologicas',
            'pensum_id'                     => 4,
            'periodo_id'                    => 1,
            'role_user_id'                  => 3,
        ]);

        Materia::create([
            'nombre_materia'                => 'Dibujo',
            'descripcion_materia'           => 'Dibujo',
            'pensum_id'                     => 4,
            'periodo_id'                    => 1,
            'role_user_id'                  => 3,
        ]);

        Materia::create([
            'nombre_materia'                => 'Filosofia',
            'descripcion_materia'           => 'Filosofia',
            'pensum_id'                     => 4,
            'periodo_id'                    => 1,
            'role_user_id'                  => 3,
        ]);

        Materia::create([
            'nombre_materia'                => 'Instruccion Premilitar',
            'descripcion_materia'           => 'Instruccion Premilitar',
            'pensum_id'                     => 4,
            'periodo_id'                    => 1,
            'role_user_id'                  => 3,
        ]);

        // 4to año

    }
}
