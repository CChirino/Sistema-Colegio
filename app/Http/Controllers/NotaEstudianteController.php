<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notas;
use App\User;
use App\Materia;
use App\Periodo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class NotaEstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','notas-estudiante.index');
        $estudiante =  Auth::user()->id;
        $materias = DB::table('notas')
                    ->join('inscripcion_materia', 'notas.estudiante_id', '=', 'inscripcion_materia.id')
                    ->join('inscripcions', 'inscripcion_materia.inscripcion_id', '=', 'inscripcions.id')
                    ->join('role_user', 'inscripcions.role_user_id', '=', 'role_user.user_id')
                    ->join('users', 'role_user.user_id', '=', 'users.id')
                    ->join('materias', 'notas.materias_id', '=', 'materias.id')
                    ->join('periodos', 'materias.periodo_id', '=', 'periodos.id')
                    ->join('pensums', 'materias.pensum_id', '=', 'pensums.id')
                    ->select('materias.nombre_materia','pensums.pensum_nombre','periodos.nombre_periodo','users.apellido','users.nombre','notas.id')
                    ->where('role_user.user_id', '=', $estudiante )
                    ->paginate(7);  
        return view('admin.nota-estudiante.index', compact('materias'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Gate::authorize('haveaccess','notas-estudiante.show');
        $estudiante = Auth::user()->id;
        // Gate::authorize('haveaccess','notas.edit');
        $materias = DB::table('notas')
                    ->join('inscripcion_materia', 'notas.estudiante_id', '=', 'inscripcion_materia.id')
                    ->join('inscripcions', 'inscripcion_materia.inscripcion_id', '=', 'inscripcions.id')
                    ->join('role_user', 'inscripcions.role_user_id', '=', 'role_user.user_id')
                    ->join('users', 'role_user.user_id', '=', 'users.id')
                    ->join('materias', 'notas.materias_id', '=', 'materias.id')
                    ->join('periodos', 'materias.periodo_id', '=', 'periodos.id')
                    ->join('pensums', 'materias.pensum_id', '=', 'pensums.id')
                    ->select('notas.*', 'materias.*','pensums.*','periodos.*','users.*')
                    ->where('role_user.user_id', '=', $estudiante )
                    ->get();  
        return view('admin.nota-estudiante.show', compact('materias','estudiante'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
