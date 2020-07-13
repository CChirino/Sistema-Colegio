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



class InscripcionController extends Controller
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
        Gate::authorize('haveaccess','materias.create');
        $pensum = Pensum::get();
        $periodo = Periodo::get();
        $materia = Materia::get();
        $estudiantes = DB::select('SELECT * FROM users JOIN role_user ON users.id = role_user.user_id WHERE role_id = 3');
        return view('admin.inscripcion.create',compact('pensum','estudiantes','periodo','materia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  $request->validate([
        //      'periodo_id '=>'required',
        //      'pensum_id'=>'required',
        //      'role_user_id'=>'required',
        // ]);
        $inscripcion = Inscripcion::create($request->all());
        $inscripcion->materias()->sync($request->get('materias'));
        $inscripcion->save();
        return redirect()->route('inscripciones.index');    

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
