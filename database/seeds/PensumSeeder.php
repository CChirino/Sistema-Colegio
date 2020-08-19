<?php

use Illuminate\Database\Seeder;
use App\Pensum;

class PensumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pensum::create([
            'pensum_nombre'          => 'Inicial',
        ]);
        Pensum::create([
            'pensum_nombre'          => 'Primer nivel',
        ]);
        Pensum::create([
            'pensum_nombre'          => 'Segundo nivel',
        ]);
        Pensum::create([
            'pensum_nombre'          => 'Tercer nivel',
        ]);
        Pensum::create([
            'pensum_nombre'          => 'Primer Grado',
        ]);
        Pensum::create([
            'pensum_nombre'          => 'Segundo Grado',
        ]);
        Pensum::create([
            'pensum_nombre'          => 'Tercer Grado',
        ]);
        Pensum::create([
            'pensum_nombre'          => 'Cuarto Grado',
        ]);
        Pensum::create([
            'pensum_nombre'          => 'Quintado Grado',
        ]);
        Pensum::create([
            'pensum_nombre'          => 'Sexto Grado',
        ]);
        Pensum::create([
            'pensum_nombre'          => '1er año',
        ]);
        Pensum::create([
            'pensum_nombre'          => '2do año',
        ]);
        Pensum::create([
            'pensum_nombre'          => '3er año',
        ]);
        Pensum::create([
            'pensum_nombre'          => '4to año',
        ]);
        Pensum::create([
            'pensum_nombre'          => '5to año',
        ]);

    }
}
