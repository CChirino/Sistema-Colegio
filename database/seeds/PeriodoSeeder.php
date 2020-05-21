<?php

use Illuminate\Database\Seeder;
use App\Periodo;

class PeriodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Periodo::create([
            'nombre_periodo'          => '001 - Online',
            'fecha_inicio'            => '2020-05-19',
            'fecha_fin'               => '2020-06-17'

        ]);
    }
}
