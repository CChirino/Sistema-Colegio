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
        'name' => 'Coordinador',
        'full-access' => 'no'
    ]);
    Role::create([
        'name' => 'Guest',
        'full-access' => 'no'
    ]);
    Role::create([
        'name' => 'test',
        'full-access' => 'no'
    ]);
    }
}
