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
        'image'             => 'images/default.png'
     ]);
     $useradminmuestra= User::where('email','admin@gmail.com');
     if ($useradminmuestra) {
         $useradminmuestra->delete();
     }
     $useradminmuestra= User::create([
        'dni'               => 11817957,
        'nombre'            => 'Gustavo',
        'apellido'          => 'Adolfo',
        'direccion'         => 'Caracas',
        'fecha_nacimiento'  => '1997-03-14',
        'email'             => 'admin@gmail.com',
        'password'          => Hash::make('Eskuela-141173*+Xyz'),
        'image'             => 'images/default.png'

     ]);

     $admin2= User::where('email','christopherchirinosj@gmail.com');
     if ($admin2) {
         $admin2->delete();
     }
     $admin2= User::create([
        'dni'               => 271593822,
        'nombre'            => 'Jose',
        'apellido'          => 'Suarez',
        'direccion'         => 'Caracas',
        'fecha_nacimiento'  => '1997-03-14',
        'email'             => 'christopherchirinosj@gmail.com',
        'password'          => Hash::make('Eskuela-141173*+Xyz'),
        'image'             => 'images/default.png'
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
         
         $userprf= User::where('email','critijo@hotmai.com');
         if ($userprf) {
             $userprf->delete();
         }
         $userprf= User::create([
            'dni'               => 27159386,
            'nombre'            => 'Jose',
            'apellido'          => 'Chirino',
            'direccion'         => 'Chacao',
            'fecha_nacimiento'  => '1997-03-14',
            'email'             => 'critijo@hotmail.com',
            'password'          => Hash::make('chacao14397'),
            'image'             => 'images/default.png'

         ]);
    
         //rol Profesor
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
            'name' => 'Notas show',
            'slug' => 'notas.show',
            'description' => 'A user can see notas',
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
         
         $permission = Permission::create([
            'name' => 'Evaluaciones index',
            'slug' => 'evaluaciones.index',
            'description' => 'Inicio Evaluaciones',
        ]);
   
        $permission_all[] = $permission->id;
        $permission = Permission::create([
            'name' => 'Evaluaciones create',
            'slug' => 'evaluaciones.create',
            'description' => 'Crear Evaluaciones',
        ]);
   
        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Evaluaciones store',
            'slug' => 'evaluaciones.store',
            'description' => 'Store Evaluaciones',
        ]);
   
        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Listar Evaluaciones Index',
            'slug' => 'listar-evaluaciones.index',
            'description' => 'Listar Evaluaciones',
        ]);
    
        $permission_all[] = $permission->id;
    
        $permission = Permission::create([
            'name' => 'Show Evaluaciones ',
            'slug' => 'listar-evaluaciones.show',
            'description' => 'Show Evaluaciones',
        ]);
    
        $permission_all[] = $permission->id;
    
        $permission = Permission::create([
            'name' => 'update Evaluaciones ',
            'slug' => 'listar-evaluaciones.update',
            'description' => 'update Evaluaciones',
        ]);
    
        $permission_all[] = $permission->id;
    
        $permission = Permission::create([
            'name' => 'edit Evaluaciones ',
            'slug' => 'listar-evaluaciones.edit',
            'description' => 'edit Evaluaciones',
        ]);
    
        $permission_all[] = $permission->id;
    
        $permission = Permission::create([
            'name' => 'destroy Evaluaciones ',
            'slug' => 'listar-evaluaciones.destroy',
            'description' => 'destroy Evaluaciones',
        ]);
    
        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'subir-evaluacion-estudiante index',
            'slug' => 'subir-evaluacion-estudiante.index',
            'description' => 'subir-evaluacion-estudiante index',
        ]);
    
        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'subir-evaluacion-estudiante show',
            'slug' => 'subir-evaluacion-estudiante.show',
            'description' => 'subir-evaluacion-estudiante show',
        ]);
    
        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'clases-en-linea.index index profesor',
            'slug' => 'clases-en-linea.index',
            'description' => 'clases-en-linea.index profesor',
        ]);
    
        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'clases-en-linea.create create profesor clase',
            'slug' => 'clases-en-linea.create',
            'description' => 'clases-en-linea.create clase en linea',
        ]);
    
        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'clases-en-linea.show profesor clase',
            'slug' => 'clases-en-linea.show',
            'description' => 'clases-en-linea.show profesor clase',
        ]);
    
        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'clases-en-linea.edit profesor clase',
            'slug' => 'clases-en-linea.edit',
            'description' => 'clases-en-linea.edit profesor clase',
        ]);
    
        $permission_all[] = $permission->id;
        
        $permission = Permission::create([
            'name' => 'clases-en-linea.destroy profesor clase',
            'slug' => 'clases-en-linea.destroy',
            'description' => 'clases-en-linea.show profesor clase',
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
        'image'             => 'images/default.png'
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
        
     //permission role
     $permission = Permission::create([
         'name' => 'inscripciones-estudiante ',
         'slug' => 'inscripciones-estudiante.store',
         'description' => 'inscripciones-estudiante store',
     ]);

     $permission_all[] = $permission->id;

     $permission = Permission::create([
        'name' => 'inscripciones-estudiante create',
        'slug' => 'inscripciones-estudiante.create',
        'description' => 'inscripciones-estudiante create',
    ]);

    $permission_all[] = $permission->id;

    $permission = Permission::create([
        'name' => 'notas-estudiante show',
        'slug' => 'notas-estudiante.show',
        'description' => 'notas-estudiante show',
    ]);

    $permission_all[] = $permission->id;

    $permission = Permission::create([
        'name' => 'notas-estudiante index',
        'slug' => 'notas-estudiante.index',
        'description' => 'notas-estudiante index',
    ]);

    $permission_all[] = $permission->id;

    $permission = Permission::create([
        'name' => 'subir-evaluacion-estudiante create',
        'slug' => 'subir-evaluacion-estudiante.create',
        'description' => 'subir-evaluacion-estudiante create',
    ]);

    $permission_all[] = $permission->id;

    $permission = Permission::create([
        'name' => 'subir-evaluacion-estudiante store',
        'slug' => 'subir-evaluacion-estudiante.store',
        'description' => 'subir-evaluacion-estudiante store',
    ]);

    $permission_all[] = $permission->id;


    $permission = Permission::create([
        'name' => 'evaluacion-estudiante index',
        'slug' => 'evaluacion-estudiante.index',
        'description' => 'evaluacion-estudiante index',
    ]);

    $permission_all[] = $permission->id;

    $permission = Permission::create([
        'name' => 'evaluacion-estudiante show',
        'slug' => 'evaluacion-estudiante.show',
        'description' => 'evaluacion-estudiante show',
    ]);

    $permission_all[] = $permission->id;

    $permission = Permission::create([
        'name' => 'evaluacion-estudiante update',
        'slug' => 'evaluacion-estudiante.update',
        'description' => 'evaluacion-estudiante update',
    ]);

    $permission_all[] = $permission->id;

    $permission = Permission::create([
        'name' => 'evaluacion-estudiante edit',
        'slug' => 'evaluacion-estudiante.edit',
        'description' => 'evaluacion-estudiante edit',
    ]);

    $permission_all[] = $permission->id;

    $permission = Permission::create([
        'name' => 'evaluacion-estudiante destroy',
        'slug' => 'evaluacion-estudiante.destroy',
        'description' => 'evaluacion-estudiante destroy',
    ]);

    $permission_all[] = $permission->id;

    $permission = Permission::create([
        'name' => 'ver-clase-en-linea index estudiante',
        'slug' => 'ver-clase-en-linea.index',
        'description' => 'ver-clase-en-linea index estudiante',
    ]);

    $permission_all[] = $permission->id;

    $permission = Permission::create([
        'name' => 'ver-clase-en-linea show estudiante',
        'slug' => 'ver-clase-en-linea.show',
        'description' => 'ver-clase-en-linea show estudiante',
    ]);

    $permission_all[] = $permission->id;





    //table permission_role
    $rolest->permissions()->sync( $permission_all);
    
    }

    
    
}

