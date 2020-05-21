<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materia;
use App\Pensum;
use App\Periodo;
use App\Role;
use App\User;
use Illuminate\Support\Facades\DB;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materias = DB::table('materias')
                    ->join('pensums','pensums.id', '=','materias.pensum_id')
                    ->join('periodos','periodo_id', '=','materias.periodo_id')
                    ->select('materias.id','materias.nombre_materia','materias.descripcion_materia','materias.pensum_id','materias.periodo_id','pensums.pensum_nombre','periodos.nombre_periodo')
                    ->paginate(7);
        return view('admin.materias.index', compact('materias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pensum = Pensum::get();
        $periodo = Periodo::get();
        $profesores = DB::select('SELECT * FROM users JOIN role_user ON users.id = role_user.user_id WHERE role_id = 3');
        return view('admin.materias.create',compact('pensum','periodo','profesores'));
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
            'nombre_materia'=>'required',
            'descripcion_materia'=>'required'
        ]);        
        $materias = new Materia([
            'nombre_materia'                    => $request->get('nombre_materia'),
            'descripcion_materia'               => $request->get('descripcion_materia'),
            'pensum_id'                         => $request->get('pensum_id'),
            'periodo_id'                        => $request->get('periodo_id'),
            'role_user_id'                        => $request->get('role_user_id'),

        ]);
        $materias->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $materias = Materia::find($id);
        $pensum = Pensum::get();
        $periodo = Periodo::get();
        return view('admin.materias.show', compact('materias','pensum','periodo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $materias = Materia::find($id);
        $pensum = Pensum::get();
        $periodo = Periodo::get();
        return view('admin.materias.edit',compact('materias', 'pensum','periodo'));
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
        // $materias = Materia::find($id);
        $request->validate([
            'nombre_materia'=>'required',
            'descripcion_materia'=>'required'
        ]);     
        $materias->update([
            'nombre_materia'                    => $request->get('nombre_materia'),
            'descripcion_materia'               => $request->get('descripcion_materia'),
            'pensum_id'                         => $request->get('pensum_id'),
            'periodo_id'                         => $request->get('periodo_id'),
            ]);
        $materias->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $materias = Materia::find($id);
        $materias ->delete();
        return redirect()->route('materias.index')->with('datos','Registro eliminado correctamente!');
    }
}
