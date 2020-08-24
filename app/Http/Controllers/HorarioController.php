<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materia;
use App\Horarios;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;


class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','horarios.index');
        $horarios = DB::table('horarios')
                ->join('materias','horarios.horario_id', '=','materias.id')
                ->select('horarios.*','materias.*')
                ->paginate(7);
        return view('admin.horario.index', compact('horarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess','horarios.create');
        $materias = Materia::get();
        return view('admin.horario.create',compact('materias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'dia'=>'required',
            'horario'=>'required',
            'cupos'=>'required',
        ]);
        $horarios = new Horarios([
            'dia'                               => $request->get('dia'),
            'horario'                           => $request->get('horario'),
            'aula'                              => $request->get('aula'),
            'cupos'                             => $request->get('cupos'),
            'seccion'                           => $request->get('seccion'),
            'horario_id'                        => $request->get('horario_id')
        ]);    
        $horarios->save();
        return redirect()->route('horarios.index')->with('status_success','Usuario creado de manera correcta');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Gate::authorize('haveaccess','horarios.show');
        $horarios = Horarios::find($id);
        $materias = Materia::get();
        return view('admin.horario.show',compact('horarios','materias'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Gate::authorize('haveaccess','horarios.edit');
        $horarios = Horarios::find($id);
        $materias = Materia::get();
        return view('admin.horario.edit',compact('horarios','materias'));
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
        $horarios = Horarios::find($id);
        $request->validate([
            'dia'=>'required',
            'horario'=>'required',
            'cupos'=>'required',
        ]);
        $horarios->update([
            'dia'                               => $request->get('dia'),
            'horario'                           => $request->get('horario'),
            'aula'                              => $request->get('aula'),
            'cupos'                             => $request->get('cupos'),
            'seccion'                           => $request->get('seccion'),
            'horario_id'                        => $request->get('horario_id')
        ]);    
        $horarios->save();
        return redirect()->route('horarios.index')->with('status_success','Usuario actualizado de manera correcta');

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
