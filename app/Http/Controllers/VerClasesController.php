<?php

namespace App\Http\Controllers;

use App\Clase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class VerClasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','ver-clase-en-linea.index');
        $estudiante =  Auth::user()->id;
        $verclases = DB::table('inscripcions')
            ->join('inscripcion_materia', 'inscripcions.id', '=', 'inscripcion_materia.inscripcion_id')
            ->join('clases', 'inscripcion_materia.materia_id', '=', 'clases.materia_id')
            ->join('materias', 'inscripcion_materia.materia_id', '=', 'materias.id')
            ->select('clases.*','materias.*')
            ->where('inscripcions.role_user_id', '=', $estudiante )
            ->get();  
        $clase = Clase::get()->all();
        return view('admin.ver-clase.index', compact('verclases','estudiante','clase'));

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
        Gate::authorize('haveaccess','ver-clase-en-linea.show');
        $verclases = Clase::find($id);
        return view('admin.ver-clase.show', compact('verclases'));

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
