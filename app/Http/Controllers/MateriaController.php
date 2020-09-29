<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materia;
use App\Pensum;
use App\Periodo;
use App\Role;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;


class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        Gate::authorize('haveaccess','materias.index');
        $nombre = $request->get('search'); 
        $lista_materias = DB::table('materias')
                    ->join('periodos','materias.periodo_id', '=','periodos.id')
                    ->join('pensums','materias.pensum_id', '=','pensums.id')
                    ->join('role_user','materias.role_user_id', '=','role_user.id')
                    ->join('users','role_user.user_id', '=','users.id')
                    ->select('materias.id','materias.nombre_materia','pensums.pensum_nombre','periodos.nombre_periodo','users.nombre','users.apellido')
                    ->where('materias.nombre_materia','LIKE','%'.$nombre.'%')
                    ->orderBy('materias.id', 'asc')
                    ->paginate(7);
        $materias = DB::table('materias')
                    ->select('materias.id')
                    ->orderBy('materias.id', 'asc')
                    ->paginate(7);
        return view('admin.materias.index', compact('materias','lista_materias','nombre'));
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
        $profesores = DB::select('SELECT * FROM users JOIN role_user ON users.id = role_user.user_id WHERE role_id = 2');
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
        // $materias = Materia::create($request->except('_method', '_token'));
        // $materias->sync($request->get('pensum_id'));
        request()->validate([
            'nombre_materia'=>'required',
           'descripcion_materia'=>'required'
           ]);        
        // $materias = new Materia([
        //     'nombre_materia'                    => $request->get('nombre_materia'),
        //     'descripcion_materia'               => $request->get('descripcion_materia'),
        //     'pensum_id'                         => $request->get('pensum_id'),
        //     'periodo_id'                        => $request->get('periodo_id'),
        //     'role_user_id'                      => $request->get('role_user_id'),
        // ]);
        $materias = Materia::create(request()->all());
        $materias->save();
        return redirect()->route('materias.index', compact('materias'))->with('status_success','La materia se ha creado de manera correcta');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Gate::authorize('haveaccess','materias.show');
        // $materias = Materia::find($id);
        // $pensum = Pensum::find($id);
        // $periodo = Periodo::find($id);
        //  $profesores = DB::table('materias')
        //          ->join('role_user', 'materias.role_user_id', '=', 'role_user.id')
        //          ->join('users', 'role_user.user_id', '=', 'users.id')
        //          ->select('materias.*','users.*')
        //          ->where('materias.role_user_id', '=', $id )
        //          ->first;          
        // // $profesores = DB::select('SELECT * FROM users JOIN role_user ON users.id = role_user.user_id WHERE role_id = 2');
        // // $profesores =  Materia::with(['pensums','periodos'])->get();
        // // $profesores = DB::table('materias')
        // //              ->join('pensums','materias.pensum_id', '=','pensums.id')
        // //              ->join('periodos','materias.periodo_id', '=','periodos.id')
        // //              ->join('role_user','materias.role_user_id', '=','role_user.id')
        // //              ->join('users','role_user.user_id', '=','users.id')
        // //              ->select('materias.*','pensums.*','periodos.*','users.*')
        // //              ->where('materias.id', '=', $materias )
        // //              ->get();
        // return view('admin.materias.show', compact('materias','profesores','pensum','periodo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Gate::authorize('haveaccess','materias.edit');
        $materias = Materia::find($id);
        $pensum = Pensum::get();
        $periodo = Periodo::get();
        $profesores = DB::select('SELECT * FROM users JOIN role_user ON users.id = role_user.user_id WHERE role_id = 2');
        return view('admin.materias.edit',compact('materias', 'pensum','periodo','profesores'));
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
        $materias = Materia::find($id);
        $request->validate([
            'nombre_materia'=>'required',
            'descripcion_materia'=>'required'
        ]);     
        $materias->update([
            'nombre_materia'                    => $request->get('nombre_materia'),
            'descripcion_materia'               => $request->get('descripcion_materia'),
            'pensum_id'                         => $request->get('pensum_id'),
            'periodo_id'                         => $request->get('periodo_id'),
            'role_user_id'                        => $request->get('role_user_id'),
            ]);
        $materias->save();
        
        return redirect()->route('materias.index', compact('materias'))->with('status_success','La materia se ha actualizado de manera correcta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gate::authorize('haveaccess','materias.destroy');
        $materias = Materia::find($id);
        $materias->delete();
        return redirect()->route('materias.index')->with('status_success','La materia se ha eliminado de manera correcta');
    }
}
