<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notas;
use App\User;
use App\Materia;
use App\Periodo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class NotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        Gate::authorize('haveaccess','notas.index');
        $profesor = Auth::user()->id;
        $materias = DB::table('users')
            ->join('role_user', 'users.id', '=', 'role_user.id')
            ->join('materias', 'role_user.id', '=', 'materias.role_user_id')
            ->select('users.*', 'role_user.*', 'materias.*')
            ->where('materias.role_user_id', '=', $profesor )
            ->get();

        return view('admin.nota.index', compact('materias'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $profesor = Auth::user()->id;
        
        Gate::authorize('haveaccess','notas.create');
        $estudiante =DB::table('inscripcion_materia')->distinct()
                    ->join('inscripcions', 'inscripcion_materia.inscripcion_id', '=', 'inscripcions.id')
                    ->join('role_user', 'inscripcions.role_user_id', '=', 'role_user.id')
                    ->join('users', 'role_user.user_id', '=', 'users.id')
                    ->join('materias', 'inscripcion_materia.materia_id', '=', 'materias.id')
                    ->select('users.*','inscripcion_materia.*')
                    ->where('materias.role_user_id', '=', $profesor ) 
                    ->get();
        $materias = DB::table('users')->distinct()
            ->join('role_user', 'users.id', '=', 'role_user.id')
            ->join('materias', 'role_user.id', '=', 'materias.role_user_id')
            ->select('users.*', 'role_user.*', 'materias.*')
            ->where('materias.role_user_id', '=', $profesor )
            ->get();
        return view('admin.nota.create',compact('estudiante','materias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'pensum_id'=>'required',
        //     'role_user_id'=>'required',
        //     'periodo_id'=>'required',

        // ]);        
        $notas = Notas::create($request->except('_method', '_token'));
        $notas->save();
        return redirect()->route('notas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Gate::authorize('haveaccess','notas.show');
        $profesor = Auth::user()->id;
        $estudiante =DB::table('inscripcion_materia')
                    ->join('inscripcions', 'inscripcion_materia.inscripcion_id', '=', 'inscripcions.id')
                    ->join('role_user', 'inscripcions.role_user_id', '=', 'role_user.id')
                    ->join('users', 'role_user.user_id', '=', 'users.id')
                    ->join('materias', 'inscripcion_materia.materia_id', '=', 'materias.id')
                    ->select('users.*','inscripcion_materia.*')
                    ->where('materias.role_user_id', '=', $profesor )
                    ->get();
        $materias = DB::table('users')
                    ->join('role_user', 'users.id', '=', 'role_user.id')
                    ->join('materias', 'role_user.id', '=', 'materias.role_user_id')
                    ->select('users.*', 'role_user.*', 'materias.*')
                    ->where('materias.role_user_id', '=', $profesor )
                    ->get();                    
        $notas = Notas::find($id);
        return view('admin.nota.show', compact('notas','estudiante','materias'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profesor = Auth::user()->id;
        Gate::authorize('haveaccess','notas.edit');
        $materias = DB::table('users')
                    ->join('role_user', 'users.id', '=', 'role_user.id')
                    ->join('materias', 'role_user.id', '=', 'materias.role_user_id')
                    ->select('users.*', 'role_user.*', 'materias.*')
                    ->where('materias.role_user_id', '=', $profesor )
                    ->get();  
        $estudiante =DB::table('inscripcion_materia')
            ->join('inscripcions', 'inscripcion_materia.inscripcion_id', '=', 'inscripcions.id')
            ->join('role_user', 'inscripcions.role_user_id', '=', 'role_user.id')
            ->join('users', 'role_user.user_id', '=', 'users.id')
            ->join('materias', 'inscripcion_materia.materia_id', '=', 'materias.id')
            ->select('users.*')
            ->where('materias.role_user_id', '=', $profesor )
            ->get();
        $notas = Notas::find($id);
        
        return view('admin.nota.edit',compact('materias','estudiante','notas'));

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
        
        $notas = Notas::find($id);
        $notas->update($request->all());
        // $notas = Notas::update($request->except('_method', '_token'));
        // $notas->save();
        return redirect()->route('notas.index', compact('notas'));

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
