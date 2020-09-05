<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evaluacione;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;



class EvaluacionesEstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','evaluacion-estudiante.index');
        $estudiante =  Auth::user()->id;
        $evaluaciones = DB::table('users')
                    ->join('role_user', 'users.id', '=', 'role_user.user_id')
                    ->join('inscripcions', 'role_user.id', '=', 'inscripcions.role_user_id')
                    ->join('inscripcion_materia', 'inscripcions.id', '=', 'inscripcion_materia.inscripcion_id')
                    ->join('evaluaciones', 'inscripcion_materia.materia_id', '=', 'evaluaciones.materias_id')
                    ->join('materias', 'evaluaciones.materias_id', '=', 'materias.id')
                    ->select('evaluaciones.*','materias.*')
                    ->where('users.id', '=', $estudiante )
                    ->get();  
        $evaluacion = Evaluacione::all();            
        return view('admin.evaluacion-estudiante.index', compact('evaluaciones','evaluacion','estudiante'));
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
        Gate::authorize('haveaccess','evaluacion-estudiante.show');
        // $estudiante = Auth::user()->id;
        $evaluaciones = Evaluacione::find($id);
        return view('admin.evaluacion-estudiante.show', compact('evaluaciones'));

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
