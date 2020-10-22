<?php

namespace App\Http\Controllers;

use App\OpinionEvaluacione;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class OpinionEvaluacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','opinion-evaluaciones.index');
        $profesor = Auth::user()->id;
        $listarevaluaciones =  DB::table('opinion_evaluaciones')
                            ->join('subir_evaluaciones', 'opinion_evaluaciones.subir_evaluaciones_id', '=', 'subir_evaluaciones.id')
                            ->join('role_user', 'subir_evaluaciones.user_id', '=', 'role_user.user_id')
                            ->join('users', 'role_user.user_id', '=', 'users.id')
                            ->join('evaluaciones', 'subir_evaluaciones.evaluaciones_id', '=', 'evaluaciones.id')
                            ->join('materias', 'evaluaciones.materia_id', '=', 'materias.id')
                            ->join('role_user as ru', 'materias.role_user_id', '=', 'ru.id')
                            ->join('users as u', 'ru.user_id', '=', 'u.id')
                            ->select('users.nombre','users.apellido','materias.nombre_materia','evaluaciones.nombre_evaluacion','subir_evaluaciones.nombre_archivo','opinion_evaluaciones.opinion','opinion_evaluaciones.id')
                            ->orderBy('materias.nombre_materia', 'asc')
                            ->orderBy('subir_evaluaciones.user_id', 'asc')
                            ->where('u.id', '=', $profesor )
                            ->paginate(50);

        return view('admin.opiniones-evaluaciones.index', compact('listarevaluaciones','profesor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess','opinion-evaluaciones.create');
        $profesor = Auth::user()->id;
        $listarevaluaciones =  DB::table('subir_evaluaciones')
                            ->join('role_user', 'subir_evaluaciones.user_id', '=', 'role_user.user_id')
                            ->join('users', 'role_user.user_id', '=', 'users.id')
                            ->join('evaluaciones', 'subir_evaluaciones.evaluaciones_id', '=', 'evaluaciones.id')
                            ->join('materias', 'evaluaciones.materia_id', '=', 'materias.id')
                            ->join('role_user as ru', 'materias.role_user_id', '=', 'ru.id')
                            ->join('users as u', 'ru.user_id', '=', 'u.id')
                            ->select('users.nombre','users.apellido','materias.nombre_materia','evaluaciones.nombre_evaluacion','subir_evaluaciones.nombre_archivo','subir_evaluaciones.id')
                            ->orderBy('materias.nombre_materia', 'asc')
                            ->orderBy('subir_evaluaciones.user_id', 'asc')
                            ->where('u.id', '=', $profesor )
                            ->paginate(50);
        return view('admin.opiniones-evaluaciones.create', compact('listarevaluaciones','profesor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $opinion = new OpinionEvaluacione ([
            'opinion'                    => $request->get('opinion'),
            'subir_evaluaciones_id'                      => $request->get('subir_evaluaciones_id'),
        ]);
        $opinion->save();
        return redirect()->route('opinion-evaluaciones.index')->with('status_success','Opinion de la evaluacion agregada correctamente');  

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Gate::authorize('haveaccess','opinion-evaluaciones.show');
        $opiniones = OpinionEvaluacione::find($id);
        $profesor = Auth::user()->id;
        $listarevaluaciones =  DB::table('subir_evaluaciones')
                            ->join('role_user', 'subir_evaluaciones.user_id', '=', 'role_user.user_id')
                            ->join('users', 'role_user.user_id', '=', 'users.id')
                            ->join('evaluaciones', 'subir_evaluaciones.evaluaciones_id', '=', 'evaluaciones.id')
                            ->join('materias', 'evaluaciones.materia_id', '=', 'materias.id')
                            ->join('role_user as ru', 'materias.role_user_id', '=', 'ru.id')
                            ->join('users as u', 'ru.user_id', '=', 'u.id')
                            ->select('users.nombre','users.apellido','materias.nombre_materia','evaluaciones.nombre_evaluacion','subir_evaluaciones.nombre_archivo','subir_evaluaciones.id')
                            ->orderBy('materias.nombre_materia', 'asc')
                            ->orderBy('subir_evaluaciones.user_id', 'asc')
                            ->where('u.id', '=', $profesor )
                            ->paginate(50);
        return view('admin.opiniones-evaluaciones.show', compact('opiniones','listarevaluaciones'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Gate::authorize('haveaccess','opinion-evaluaciones.edit');
        $opiniones = OpinionEvaluacione::find($id);
        $profesor = Auth::user()->id;
        $listarevaluaciones =  DB::table('subir_evaluaciones')
                            ->join('role_user', 'subir_evaluaciones.user_id', '=', 'role_user.user_id')
                            ->join('users', 'role_user.user_id', '=', 'users.id')
                            ->join('evaluaciones', 'subir_evaluaciones.evaluaciones_id', '=', 'evaluaciones.id')
                            ->join('materias', 'evaluaciones.materia_id', '=', 'materias.id')
                            ->join('role_user as ru', 'materias.role_user_id', '=', 'ru.id')
                            ->join('users as u', 'ru.user_id', '=', 'u.id')
                            ->select('users.nombre','users.apellido','materias.nombre_materia','evaluaciones.nombre_evaluacion','subir_evaluaciones.nombre_archivo','subir_evaluaciones.id')
                            ->orderBy('materias.nombre_materia', 'asc')
                            ->orderBy('subir_evaluaciones.user_id', 'asc')
                            ->where('u.id', '=', $profesor )
                            ->paginate(50);
        return view('admin.opiniones-evaluaciones.edit', compact('listarevaluaciones','opiniones','profesor'));
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
        $opiniones = OpinionEvaluacione::find($id);
        $opiniones->update($request->all());
        return redirect()->route('opinion-evaluaciones.index')->with('status_success','Opinion de la evaluacion ha sido actualizada correctamente');  


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $opiniones = OpinionEvaluacione::find($id);
        $opiniones->delete();
        return redirect()->route('opinion-evaluaciones.index')->with('status_success','Opinion, eliminado de manera correcta');
    }
}
