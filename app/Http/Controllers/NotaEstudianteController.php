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
        $materias = DB::table('users')
                    ->join('role_user', 'users.id', '=', 'role_user.id')
                    ->join('inscripcions', 'role_user.id', '=', 'inscripcions.role_user_id')
                    ->join('pensums', 'inscripcions.pensum_id', '=', 'pensums.id')
                    ->join('periodos', 'inscripcions.periodo_id', '=', 'periodos.id')
                    ->select('users.*', 'role_user.*', 'inscripcions.*','pensums.*','periodos.*')
                    ->where('users.id', '=', $estudiante )
                    ->get();  
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
        $materias = DB::table('users')
                    ->join('role_user', 'users.id', '=', 'role_user.id')
                    ->join('inscripcions', 'role_user.id', '=', 'inscripcions.role_user_id')
                    ->join('inscripcion_materia', 'inscripcions.id', '=', 'inscripcion_materia.inscripcion_id')
                    ->join('notas', 'inscripcion_materia.id', '=', 'notas.estudiante_id')
                    ->join('materias', 'notas.notas_id', '=', 'materias.role_user_id')
                    ->select('users.*', 'role_user.*', 'inscripcions.*','inscripcion_materia.*','notas.*','materias.*')
                    ->where('users.id', '=', $estudiante )
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
