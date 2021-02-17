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
Route::get('usuarios/registros-eliminados', 'UserController@restore_index');
Route::post('usuarios/restaurar/{id}', 'UserController@restore_record')->name('usuarios.restaurar');
Route::resource('usuarios', 'UserController');
Route::resource('admin', 'AdminController');
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
Route::resource('evaluaciones', 'EvaluacionesController')->only([
    'index', 'create', 'store'
]);
Route::resource('listar-evaluaciones', 'ListarEvaluacionesController')->only([
    'index', 'show', 'update','edit','destroy'
]);
Route::resource('evaluacion-estudiante', 'EvaluacionesEstudianteController')->only([
    'index', 'show', 'update','edit','destroy'
]);
Route::resource('subir-evaluacion-estudiante', 'SubirEvaluacionEstudianteController')->only([
    'index', 'show', 'create','store','destroy'
]);
Route::resource('subir-evaluacion-admin', 'SubirEvaluacionesAdminController')->only([
    'index', 'show', 
]);
Route::resource('inscripciones-estudiante', 'InscripcionEstudianteController')->only([
    'store', 'create'
]);
Route::resource('notas-estudiante', 'NotaEstudianteController')->only([
    'index', 'show'
]);
Route::resource('usuario-rol', 'UserRoleController');
Route::resource('clases-en-linea', 'ClasesController');
Route::resource('ver-clase-en-linea', 'VerClasesController');
Route::resource('horario-profesor', 'HorariosProfesorController');
Route::resource('listado-estudiantes', 'ListadoestudianteController');
Route::resource('permisos', 'PermissionController');
Route::resource('horario-estudiante', 'HorarioestudianteController');
Route::resource('ver-evaluacion', 'VerEvaluacionController');
Route::resource('opinion-evaluaciones', 'OpinionEvaluacionesController');
Route::resource('opinion-evaluaciones-estudiantes', 'OpinionEvaluacionesEstudiantesController');











