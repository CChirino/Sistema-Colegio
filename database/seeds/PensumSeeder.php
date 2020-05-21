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
