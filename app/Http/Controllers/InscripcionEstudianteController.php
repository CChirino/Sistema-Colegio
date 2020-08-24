<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inscripcion;
use App\Materia;
use App\Pensum;
use App\Periodo;
use App\Role;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class InscripcionEstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess','inscripciones-estudiante.create');
        $pensum = Pensum::get();
        $periodo = Periodo::get();
        $materia = Materia::get();
        $estudiantes = Auth::user();
        $año_materias = DB::table('materias')
                ->join('pensums', 'materias.pensum_id', '=', 'pensums.id')
                ->select('pensums.*', 'materias.*')
                // ->where('materias.role_user_id', '=', $profesor )
                ->get();
        
        return view('admin.inscripcion-estudiante.create',compact('pensum','estudiantes','periodo','materia','año_materias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('haveaccess','inscripciones-estudiante.store');
        $inscripcion = Inscripcion::create($request->all());
        $inscripcion->materias()->sync($request->get('materias'));
        $inscripcion->save();
        return redirect()->route('home')->with('status_success','Usuario creado de manera correcta');    
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
