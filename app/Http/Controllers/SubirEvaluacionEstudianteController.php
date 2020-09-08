<?php

namespace App\Http\Controllers;

use App\Evaluacione;
use App\SubirEvaluacione;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;


class SubirEvaluacionEstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','subir-evaluacion-estudiante.index');
        $profesor = Auth::user()->id;
        $listarevaluaciones =  DB::table('subir_evaluaciones')
                            ->join('role_user', 'subir_evaluaciones.user_id', '=', 'role_user.user_id')
                            ->join('users', 'role_user.user_id', '=', 'users.id')
                            ->join('evaluaciones', 'subir_evaluaciones.evaluaciones_id', '=', 'evaluaciones.id')
                            ->join('materias', 'evaluaciones.materia_id', '=', 'materias.id')
                            ->join('role_user as ru', 'materias.role_user_id', '=', 'ru.id')
                            ->select('users.*','materias.*')
                            ->where('ru.user_id', '=', $profesor )
                            ->get();
        $subirevaluaciones =  DB::table('subir_evaluaciones')
                            ->join('evaluaciones', 'subir_evaluaciones.evaluaciones_id', '=', 'evaluaciones.id')
                            ->join('materias', 'evaluaciones.materia_id', '=', 'materias.id')
                            ->join('role_user', 'materias.role_user_id', '=', 'role_user.id')
                            ->join('users', 'role_user.user_id', '=', 'users.id')
                            ->select('subir_evaluaciones.id')
                            ->where('users.id', '=', $profesor )
                            ->get();
        // dd($subirevaluaciones);
        // $subirevaluaciones = SubirEvaluacione::paginate(2);
        return view('admin.subir-evaluacion.index', compact('listarevaluaciones','profesor','subirevaluaciones'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess','subir-evaluacion-estudiante.create');
        $evaluacion = Evaluacione::get()->all();
        return view('admin.subir-evaluacion.create',compact('evaluacion'));    

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('haveaccess','subir-evaluacion-estudiante.store');
        // $evaluaciones = SubirEvaluacione::create($request->except('_method', '_token'));
         $request->validate([
             'nombre_archivo'                    => ['required', 'string', 'max:255'],
            'comentario'                        => ['required', 'string', 'max:255'],
           'archivo_evaluacion'                => ['required', 'mimes:pdf', 'max:1048576' ]
        ]);
        if($request->hasFile('archivo_evaluacion')){
            $filename = $request->archivo_evaluacion->getClientOriginalName();
            $evaluaciones = SubirEvaluacione::create([
                'archivo_evaluacion'                    => $request->archivo_evaluacion->storeAs('evaluaciones',$filename,'public'),
                'nombre_archivo'                        => $request->nombre_archivo,
                'comentario'                            => $request->comentario,
                'evaluaciones_id'                       => $request->evaluaciones_id,
                'user_id'                               => $request->user_id,
            ]);
        }
        return redirect()->route('evaluacion-estudiante.index',compact('evaluaciones'))->with('status_success','Evaluacion subida de manera correcta');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Gate::authorize('haveaccess','subir-evaluacion-estudiante.show');
        $subirevaluaciones = SubirEvaluacione::find($id);
        $evaluacion = Evaluacione::get()->all();
        return view('admin.subir-evaluacion.show', compact('subirevaluaciones','evaluacion'));
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
