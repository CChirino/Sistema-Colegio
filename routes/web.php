<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\Role;
use App\Permission;
use Illuminate\Support\Facades\Gate;
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
    return view('auth.login');
});

// Route::redirect('/', '/login');

Route::get('/registro', function () {
    return view('ingreso.registro');
});
Route::get('/ingresar', function () {
    return view('ingreso.login');
});
Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/admin/profesor', function () {
    return view('admin.profesor.index-profesor');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('roles', 'RoleController');
Route::resource('profesor', 'ProfesorController');
Route::resource('estudiante', 'EstudianteController');
Route::resource('colegio', 'ColegioController');
Route::resource('coordinador', 'CoordinacionController');
Route::resource('materias', 'MateriaController');
Route::resource('periodos', 'PeriodoController');
Route::resource('horarios', 'HorarioController');
Route::resource('perfil', 'PerfilController');
Route::resource('notas', 'NotasController');
Route::resource('inscripciones', 'InscripcionController');
Route::resource('inscripciones-estudiante', 'InscripcionEstudianteController');



