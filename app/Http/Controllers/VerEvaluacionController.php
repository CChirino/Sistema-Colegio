<?php

namespace App\Http\Controllers;
use App\Evaluacione;
use App\SubirEvaluacione;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;


use Illuminate\Http\Request;

class VerEvaluacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','ver-evaluacion.index');
        $estudiante = Auth::user()->id;
        $listarevaluaciones =  DB::table('subir_evaluaciones')
                            ->join('evaluaciones', 'subir_evaluaciones.evaluaciones_id', '=', 'evaluaciones.id')
                            ->join('materias', 'evaluaciones.materia_id', '=', 'materias.id')
                            ->join('role_user', 'subir_evaluaciones.user_id', '=', 'role_user.user_id')
                            ->join('users', 'role_user.user_id', '=', 'users.id')
                            ->select('materias.nombre_materia','evaluaciones.nombre_evaluacion','subir_evaluaciones.id')
                            ->orderBy('materias.id', 'asc')
                            ->where('role_user.user_id', '=', $estudiante )
                            ->paginate(7);
        return view('admin.ver-evaluacion.index', compact('listarevaluaciones','estudiante'));


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
        Gate::authorize('haveaccess','ver-evaluacion.show');
        $subirevaluaciones = SubirEvaluacione::find($id);
        $evaluacion = Evaluacione::get()->all();
        return view('admin.ver-evaluacion.show', compact('subirevaluaciones','evaluacion'));
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
        $listarevaluaciones = SubirEvaluacione::find($id);
        $listarevaluaciones->delete();
        return redirect()->route('ver-evaluacion.index')->with('status_success','Evaluacion del estudiante, eliminado de manera correcta');
    }
}
