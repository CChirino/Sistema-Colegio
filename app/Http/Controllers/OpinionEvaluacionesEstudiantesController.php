<?php

namespace App\Http\Controllers;

use App\OpinionEvaluacione;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class OpinionEvaluacionesEstudiantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','opinion-evaluaciones-estudiantes.index');
        $estudiante = Auth::user()->id;
        $listarevaluaciones =  DB::table('opinion_evaluaciones')
                            ->join('subir_evaluaciones', 'opinion_evaluaciones.subir_evaluaciones_id', '=', 'subir_evaluaciones.id')
                            ->join('evaluaciones', 'subir_evaluaciones.evaluaciones_id', '=', 'evaluaciones.id')
                            ->join('materias', 'evaluaciones.materia_id', '=', 'materias.id')
                            ->join('role_user', 'subir_evaluaciones.user_id', '=', 'role_user.user_id')
                            ->join('users', 'role_user.user_id', '=', 'users.id')
                            ->select('materias.nombre_materia','evaluaciones.nombre_evaluacion','opinion_evaluaciones.opinion','opinion_evaluaciones.id')
                            ->where('users.id', '=', $estudiante )
                            ->paginate(10);
        return view('admin.opiniones-evaluaciones-estudiantes.index', compact('listarevaluaciones','estudiante'));

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
        Gate::authorize('haveaccess','opinion-evaluaciones-estudiantes.show');
        $opiniones = OpinionEvaluacione::find($id);
        $estudiante = Auth::user()->id;
        $listarevaluaciones =  DB::table('opinion_evaluaciones')
                            ->join('subir_evaluaciones', 'opinion_evaluaciones.subir_evaluaciones_id', '=', 'subir_evaluaciones.id')
                            ->join('evaluaciones', 'subir_evaluaciones.evaluaciones_id', '=', 'evaluaciones.id')
                            ->join('materias', 'evaluaciones.materia_id', '=', 'materias.id')
                            ->join('role_user', 'subir_evaluaciones.user_id', '=', 'role_user.user_id')
                            ->join('users', 'role_user.user_id', '=', 'users.id')
                            ->select('materias.nombre_materia','evaluaciones.nombre_evaluacion','opinion_evaluaciones.opinion','opinion_evaluaciones.id','opinion_evaluaciones.subir_evaluaciones_id')
                            ->where('users.id', '=', $estudiante )
                            ->paginate(10);
        return view('admin.opiniones-evaluaciones-estudiantes.show', compact('opiniones','listarevaluaciones'));


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
        $listarevaluaciones = OpinionEvaluacione::find($id);
        $listarevaluaciones->delete();
        return redirect()->route('opinion-evaluaciones.index')->with('status_success','Opinion, eliminada de manera correcta');
    }
}
