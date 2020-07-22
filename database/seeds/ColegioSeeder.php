<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Permission;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ColegioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::statement("SET foreign_key_checks=0");
        DB::table('role_user')->truncate();
        DB::table('permission_role')->truncate();
        Permission::truncate();
        Role::truncate();
    DB::statement("SET foreign_key_checks=1");

     //user admin
     $useradmin= User::where('email','critijo@gmail.com')->first();
     if ($useradmin) {
         $useradmin->delete();
     }
     $useradmin= User::create([
        'dni'               => 27159382,
        'nombre'            => 'Christopher',
        'apellido'          => 'Chirino',
        'direccion'         => 'Chacao',
        'fecha_nacimiento'  => '1997-03-14',
        'email'             => 'critijo@gmail.com',
        'password'          => Hash::make('chacao14397'),
     ]);
     $useradminmuestra= User::where('email','admin@gmail.com');
     if ($useradminmuestra) {
         $useradminmuestra->delete();
     }
     $useradminmuestra= User::create([
        'dni'               => 27159380,
        'nombre'            => 'admin',
        'apellido'          => 'admin',
        'direccion'         => 'admin',
        'fecha_nacimiento'  => '1997-03-14',
        'email'             => 'admin@gmail.com',
        'password'          => Hash::make('colegioadmin'),
     ]);

     //rol admin
     $roladmin=Role::create([
         'name' => 'Admin',
         'full-access' => 'yes'
 
     ]);
     
     //table role_user
     $useradmin->roles()->sync([ $roladmin->id ]);

     $useradminmuestra->roles()->sync([ $roladmin->id ]);

     //permission
     $permission_all = [];

        
     //permission role
     $permission = Permission::create([
         'name' => 'List role',
         'slug' => 'roles.index',
         'description' => 'A user can list role',
     ]);

     $permission_all[] = $permission->id;
             
     $permission = Permission::create([
         'name' => 'Show role',
         'slug' => 'roles.show',
         'description' => 'A user can see role',
     ]);

     $permission_all[] = $permission->id;
             
     $permission = Permission::create([
         'name' => 'Create role',
         'slug' => 'roles.create',
         'description' => 'A user can create role',
     ]);

     $permission_all[] = $permission->id;
             
     $permission = Permission::create([
         'name' => 'Edit role',
         'slug' => 'roles.edit',
         'description' => 'A user can edit role',
     ]);

     $permission_all[] = $permission->id;
             
     $permission = Permission::create([
         'name' => 'Destroy role',
         'slug' => 'roles.destroy',
         'description' => 'A user can destroy role',
     ]);

     $permission_all[] = $permission->id;
 
    //table permission_role
    $roladmin->permissions()->sync( $permission_all);

    //User Profesor
         
         $userprf= User::where('email','christopherchirinosj@gmail.com');
         if ($userprf) {
             $userprf->delete();
         }
         $userprf= User::create([
            'dni'               => 27159386,
            'nombre'            => 'Jose',
            'apellido'          => 'Chirino',
            'direccion'         => 'Chacao',
            'fecha_nacimiento'  => '1997-03-14',
            'email'             => 'christopherchirinosj@gmail.com',
            'password'          => Hash::make('chacao14397'),
         ]);
    
         //rol admin
         $rolprf=Role::create([
             'name' => 'Profesor',
             'full-access' => 'no'
     
         ]);
         
         //table role_user
         $userprf->roles()->sync([ $rolprf->id ]);
    
         //permission
         $permission_all = [];
    
            
         //permission role
         $permission = Permission::create([
            'name' => 'Index notas',
            'slug' => 'notas.index',
            'description' => 'A user can create notas',
        ]);
   
        $permission_all[] = $permission->id;

         $permission = Permission::create([
             'name' => 'Create notas',
             'slug' => 'notas.create',
             'description' => 'A user can create notas',
         ]);
    
         $permission_all[] = $permission->id;
                 
         $permission = Permission::create([
             'name' => 'Edit notas',
             'slug' => 'notas.edit',
             'description' => 'A user can edit notas',
         ]);
    
         $permission_all[] = $permission->id;
                 
         $permission = Permission::create([
             'name' => 'Destroy notas',
             'slug' => 'notas.destroy',
             'description' => 'A user can destroy notas',
         ]);
    
         $permission_all[] = $permission->id;
     
        //table permission_role
        $rolprf->permissions()->sync( $permission_all);
        

    //User Estudiante

    $userest= User::where('email','sucriso@gmail.com');
     if ($userest) {
         $userest->delete();
     }
     $userest= User::create([
        'dni'               => 27159384,
        'nombre'            => 'Christian',
        'apellido'          => 'Chirino',
        'direccion'         => 'Chacao',
        'fecha_nacimiento'  => '1997-03-14',
        'email'             => 'sucriso@gmail.com',
        'password'          => Hash::make('chacao14397'),
     ]);

     
     //rol Estudiante
     $rolest=Role::create([
         'name' => 'Estudiante',
         'full-access' => 'no'
 
     ]);
     
     //table role_user
     $userest->roles()->sync([ $rolest->id ]);

     

     //permission
     $permission_all = [];

     $permission = Permission::create([
         'name' => 'Notas show',
         'slug' => 'notas.show',
         'description' => 'A user can see notas',
     ]);

     $permission_all[] = $permission->id;
 
    //table permission_role
    $rolest->permissions()->sync( $permission_all);
    
    }

    
    
}
