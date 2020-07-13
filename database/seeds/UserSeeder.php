<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 20)->create();

        // $role = Role::find(1); //Rol Administrador
        // $role = factory(App\User::class)->create([
        //     'dni'               => 27159382,
        //     'nombre'            => 'Christopher',
        //     'apellido'          => 'Chirino',
        //     'direccion'         => 'Chacaito',
        //     'fecha_nacimiento'  => '1997-03-14',
        //     'email'             => 'Critijo@gmail.com',
        //     'password'          => Hash::make('123456'),
        //     'image'              => 'default.jpg'
        // ]);
    }
}
