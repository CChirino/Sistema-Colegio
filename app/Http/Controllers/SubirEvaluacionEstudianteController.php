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
        $listarevaluaciones = DB::select(DB::raw("SELECT users.nombre, users.apellido, materias.nombre_materia FROM inscripcions 
        JOIN inscripcion_materia ON inscripcions.id = inscripcion_materia.inscripcion_id
        JOIN materias ON inscripcion_materia.materia_id = materias.id
        JOIN role_user as ru ON materias.role_user_id = ru.id
        JOIN users as u ON ru.user_id = u.id
        JOIN evaluaciones ON materias.id = evaluaciones.materias_id
        JOIN subir_evaluaciones ON evaluaciones.id = subir_evaluaciones.id
        JOIN role_user ON inscripcions.role_user_id = role_user.user_id
        JOIN users ON role_user.user_id = users.id
        WHERE u.id = '$profesor'"));
        $subirevaluaciones = SubirEvaluacione::all();        
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
           'archivo_evaluacion'                => ['required', 'mimes:pdf', 'max:100000' ]
        ]);
        if($request->hasFile('archivo_evaluacion')){
            $filename = $request->archivo_evaluacion->getClientOriginalName();
            $evaluaciones = SubirEvaluacione::create([
                'archivo_evaluacion'                    => $request->archivo_evaluacion->storeAs('evaluaciones',$filename,'public'),
                'nombre_archivo'                        => $request->nombre_archivo,
                'comentario'                            => $request->comentario,
                'evaluaciones_id'                       => $request->evaluaciones_id,

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
