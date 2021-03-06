<?php

namespace App\Http\Controllers;

use App\Evaluacione;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ListarEvaluacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','listar-evaluaciones.index');
        $profesor = Auth::user()->id;
        $evaluaciones =DB::table('evaluaciones')
                        ->join('materias', 'evaluaciones.materia_id', '=', 'materias.id')
                        ->join('role_user', 'materias.role_user_id', '=', 'role_user.id')
                        ->join('users', 'role_user.user_id', '=', 'users.id')
                        ->select('evaluaciones.id','evaluaciones.nombre_evaluacion','evaluaciones.fecha_inicio','evaluaciones.fecha_fin','evaluaciones.archivo_evaluacion','evaluaciones.materia_id','materias.nombre_materia')
                        ->where('users.id', '=', $profesor )
                        ->orderBy('evaluaciones.id', 'asc')
                        ->paginate(7);
        return view('admin.listar-evaluacion.index', compact('evaluaciones'));
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
        Gate::authorize('haveaccess','listar-evaluaciones.show');
        $profesor = Auth::user()->id;
        $evaluaciones = Evaluacione::find($id);
        // $materias = DB::table('evaluaciones')
        //             ->join('materias', 'evaluaciones.materia_id', '=', 'materias.id')
        //             ->join('role_user', 'materias.role_user_id', '=', 'role_user.id')
        //             ->join('users', 'role_user.user_id', '=', 'users.id')
        //             ->select('materias.id','materias.nombre_materia','evaluaciones.nombre_evaluacion','evaluaciones.fecha_inicio','evaluaciones.fecha_fin','evaluaciones.archivo_evaluacion','evaluaciones.materia_id')
        //             ->where('users.id', '=', $profesor )
        //             ->get();
        return view('admin.listar-evaluacion.show', compact('evaluaciones'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Gate::authorize('haveaccess','listar-evaluaciones.edit');
        $evaluaciones = Evaluacione::find($id);
        $profesor = Auth::user()->id;
        $materias = DB::table('evaluaciones')
                    ->join('materias', 'evaluaciones.materia_id', '=', 'materias.id')
                    ->join('role_user', 'materias.role_user_id', '=', 'role_user.id')
                    ->join('users', 'role_user.user_id', '=', 'users.id')
                    ->select('materias.*','evaluaciones.*')
                    ->where('users.id', '=', $profesor )
                    ->get();
        // $estudiante =DB::table('inscripcion_materia')
        //     ->join('inscripcions', 'inscripcion_materia.inscripcion_id', '=', 'inscripcions.id')
        //     ->join('role_user', 'inscripcions.role_user_id', '=', 'role_user.id')
        //     ->join('users', 'role_user.user_id', '=', 'users.id')
        //     ->join('materias', 'inscripcion_materia.materia_id', '=', 'materias.id')
        //     ->select('users.*','inscripcion_materia.*')
        //     ->where('materias.role_user_id', '=', $profesor )
        //     ->get();
        return view('admin.listar-evaluacion.edit', compact('evaluaciones','materias'));

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
        Gate::authorize('haveaccess','listar-evaluaciones.update');
        $evaluaciones = Evaluacione::find($id);
        // dd($evaluaciones);
        // $evaluaciones = $request->except('_method', '_token');
        // $request->validate([
        //     'nombre_evaluacion'                 => ['required', 'string', 'max:255'],
        //     'fecha_inicio'                      => ['required', 'date'],
        //     'fecha_fin'                         => ['required', 'date'],
        //     'archivo_evaluacion'                => ['required', 'mimes:pdf', 'max:100000' ]
        // ]);
        if($request->hasFile('archivo_evaluacion')){
            $filename = $request->archivo_evaluacion->getClientOriginalName();
            $evaluaciones->update([
                'nombre_evaluacion'                 => $request->nombre_evaluacion,
                'fecha_inicio'                      => $request->fecha_inicio,
                'fecha_fin'                         => $request->fecha_fin,
                'archivo_evaluacion'                => $request->archivo_evaluacion->storeAs('evaluaciones',$filename,'public'),
                'estudiante_id'                     => $request->estudiante_id,
                'profesores_id'                     => $request->profesores_id,
            ]);
        }
        return redirect()->route('listar-evaluaciones.index', compact('evaluaciones'))->with('status_success','Usuario actualizado de manera correcta');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gate::authorize('haveaccess','listar-evaluaciones.destroy');
        $evaluaciones = Evaluacione::findOrFail($id);
        $evaluaciones ->delete();
        return redirect()->route('listar-evaluaciones.index')->with('status_success','Usuario eliminado de manera correcta');
    }
}
