<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materia;
use App\Periodo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;


class PeriodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','periodos.index');
        $periodo = Periodo::all();        
        $periodo = Periodo::paginate(7);
        return view('admin.periodo.index', compact('periodo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess','periodos.index');
        return view('admin.periodo.create');

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
            'nombre_periodo'=>'required',
            'fecha_inicio'=>'required',
            'fecha_fin'=>'required'

        ]);        
        $periodo = new Periodo([
            'nombre_periodo'                    => $request->get('nombre_periodo'),
            'fecha_inicio'                      => $request->get('fecha_inicio'),
            'fecha_fin'                         => $request->get('fecha_fin'),
        ]);
        $periodo->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Gate::authorize('haveaccess','periodos.show');
        $periodo = Periodo::find($id);
        return view('admin.periodo.show', compact('periodo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Gate::authorize('haveaccess','periodos.edit');
        $periodo = Periodo::find($id);
        return view('admin.periodo.edit',compact('periodo'));
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
        $periodo = Periodo::find($id);
        $request->validate([
            'nombre_periodo' => 'required',
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required',
        ]);

        $periodo->update($request->all());

        return redirect()->route('periodos.index')
                         ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gate::authorize('haveaccess','periodos.destroy');
        $periodo = Periodo::find($id);
        $periodo ->delete();
        return redirect()->route('periodos.index')->with('datos','Registro eliminado correctamente!');
    }
}
