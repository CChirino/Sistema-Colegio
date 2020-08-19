<?php

use Illuminate\Database\Seeder;
use App\Role;


class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    // Role::create([
    //     'name' => 'Admin',
    //     'full-access' => 'yes'
    //  ]);
    Role::create([
        'name' => 'Colegio',
        'full-access' => 'no'
    ]);
    // Role::create([
    //     'name' => 'Profesor',
    //     'full-access' => 'no'
    // ]);
    // Role::create([
    //     'name' => 'Estudiante',
    //     'full-access' => 'no'
    // ]);
    Role::create([
        'name' => 'Coordinador Etapa 1',
        'full-access' => 'no'
    ]);
    Role::create([
        'name' => 'Coordinador Etapa 2',
        'full-access' => 'no'
    ]);
    Role::create([
        'name' => 'Coordinador Etapa 3',
        'full-access' => 'no'
    ]);
    Role::create([
        'name' => 'inhabilitar',
        'full-access' => 'no'
    ]);
    }
}
