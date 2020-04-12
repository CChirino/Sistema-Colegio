<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\Role;
use App\Permission;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registro', function () {
    return view('ingreso.registro');
});
Route::get('/ingresar', function () {
    return view('ingreso.login');
});
Route::get('/admin', function () {
    return view('admin.index');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', function () {
    //return    Role::create([
    //     'name' => 'Admin',
    //     'full-access' => 'yes'
    // ]);
    // return   Role::create([
    //     'name' => 'Colegio',
    //     'full-access' => 'no'
    // ]);
    // return   Role::create([
    //     'name' => 'Profesor',
    //     'full-access' => 'no'
    // ]);
    // return   Role::create([
    //     'name' => 'Estudiante',
    //     'full-access' => 'no'
    // ]);
    // return   Role::create([
    //     'name' => 'Guest',
    //     'full-access' => 'no'
    // ]);
    // return   Role::create([
    //     'name' => 'test',
    //     'full-access' => 'no'
    // ]);
    
    // $user = User::find(1);

    /*
        en: create new record
        es: crea un nuevo registro
    */ 
    //$user->roles()->attach([1,2,3]);  
    
    /*
        en: delete new record
        es: delete un nuevo registro
    */ 
    
    //$user->roles()->detach([3]);
    /*
        en: removes from the database the roles that are not in the array as well as creates those records that are not in the database.
        es: elimina de la base de datos los roles que no estén en el array asi como tambien crea aquellos registros que no estén en la base de datos.
    */ 
    //$user->roles()->sync([1,2]);

    //return $user->roles;


//    return   Permission::create([
//         'name' => 'Ver estudiantes',
//         'slug' => 'estudiantes.index',
//         'description' => 'Este usuario puede ver la lista de estudiantes',
        
//     ]);
    // return   Permission::create([
    //     'name' => 'Crear estudiantes',
    //     'slug' => 'estudiantes.create',
    //     'description' => 'Este usuario puede crear nuevos estudiantes',
        
    // ]);

    // $role = Role::find(1);

    // $role->permissions()->sync([1,2]);

    // return $role->permissions;

});
