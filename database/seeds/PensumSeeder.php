<?php

use Illuminate\Database\Seeder;

class PensumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pensums')->insert([
            'nombre' => '1er año',
            'fecha_inicio' => '2020-04-27',
            'fecha_fin' => '2021-06-27',
        ]);
    }
}
