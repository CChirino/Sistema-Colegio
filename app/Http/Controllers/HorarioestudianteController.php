<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class HorarioestudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','horario-estudiante.index');
        $estudiante = Auth::user()->id;
        $horarios = DB::table('inscripcions')
            ->join('inscripcion_materia','inscripcions.id', '=','inscripcion_materia.inscripcion_id')
            ->join('materias','inscripcion_materia.materia_id', '=','materias.id')
            ->join('horarios','materias.id', '=','horarios.horario_id')
            ->join('role_user','inscripcions.role_user_id', '=','role_user.user_id')
            ->join('users','role_user.user_id', '=','users.id')
            ->select('horarios.*','materias.nombre_materia')
            ->where('users.id', '=', $estudiante )
            ->orderBy('horarios.id', 'asc')
            ->paginate(6);
        return view('admin.horario-estudiante.index', compact('horarios'));
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
        //
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
