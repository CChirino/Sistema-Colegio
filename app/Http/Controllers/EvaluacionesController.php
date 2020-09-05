<?php

namespace App\Http\Controllers;

use App\Evaluacione;
use App\Materia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class EvaluacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','evaluaciones.index');
        $profesor = Auth::user()->id;
        $materias = DB::table('users')
            ->join('role_user', 'users.id', '=', 'role_user.id')
            ->join('materias', 'role_user.id', '=', 'materias.role_user_id')
            ->select('users.*', 'role_user.*', 'materias.*')
            ->where('materias.role_user_id', '=', $profesor )
            ->get();
        $evaluacione = Evaluacione::all();        

        return view('admin.evaluacion.index', compact('materias','evaluacione'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess','evaluaciones.create');
        $profesor = Auth::user()->id;
        $materias = DB::table('materias')
            ->join('role_user', 'materias.role_user_id', '=', 'role_user.id')
            ->join('users', 'role_user.user_id', '=', 'users.id')
            ->select('materias.*')
            ->where('users.id', '=', $profesor )
            ->get();
        // dd($materias);
        return view('admin.evaluacion.create',compact('materias'));    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('haveaccess','evaluaciones.store');
        $profesor = Auth::user()->id;
        $request->validate([
            'nombre_evaluacion'                 => ['required', 'string', 'max:255'],
            'fecha_inicio'                      => ['required', 'date'],
            'fecha_fin'                         => ['required', 'date'],
            'archivo_evaluacion'                => ['required', 'mimes:pdf', 'max:100000' ]
        ]);
        if($request->hasFile('archivo_evaluacion')){
            $filename = $request->archivo_evaluacion->getClientOriginalName();
            $evaluacione= Evaluacione::create([
                'nombre_evaluacion'                 => $request->nombre_evaluacion,
                'fecha_inicio'                      => $request->fecha_inicio,
                'fecha_fin'                         => $request->fecha_fin,
                'archivo_evaluacion'                => $request->archivo_evaluacion->storeAs('evaluaciones',$filename,'public'),
                'materias_id'                       => $request->materias_id,

            ]);
        }
        return redirect()->route('listar-evaluaciones.index',compact('evaluacione'))->with('status_success','Evaluacion creada de manera correcta');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
