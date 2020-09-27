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
        $estudiante =DB::table('inscripcions')
                    ->join('role_user', 'inscripcions.role_user_id', '=', 'role_user.user_id')
                    ->join('users', 'role_user.user_id', '=', 'users.id')
                    ->join('inscripcion_materia', 'inscripcions.id', '=', 'inscripcion_materia.inscripcion_id')
                    ->join('materias', 'inscripcion_materia.materia_id', '=', 'materias.id')
                    ->join('role_user as ru', 'materias.role_user_id', '=', 'ru.id')
                    ->join('users as u', 'ru.user_id', '=', 'u.id')
                    ->select('users.*','inscripcion_materia.*','materias.*')
                    ->where('u.id', '=', $profesor ) 
                    ->orderBy('materias.id', 'asc')
                    ->paginate(15);
        $nota = DB::table('notas')
                    ->join('materias', 'notas.materias_id', '=', 'materias.id')
                    ->join('role_user', 'materias.role_user_id', '=', 'role_user.id')
                    ->join('users', 'role_user.user_id', '=', 'users.id')
                    ->select('notas.id')
                    ->where('users.id', '=', $profesor ) 
                    ->orderBy('materias.id', 'asc')
                    ->paginate(15);
        return view('admin.nota.index', compact('estudiante','nota'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $materia = Materia::all();
        $profesor = Auth::user()->id;
        Gate::authorize('haveaccess','notas.create');
        $estudiante =DB::table('inscripcions')
                    ->join('role_user', 'inscripcions.role_user_id', '=', 'role_user.user_id')
                    ->join('users', 'role_user.user_id', '=', 'users.id')
                    ->join('inscripcion_materia', 'inscripcions.id', '=', 'inscripcion_materia.inscripcion_id')
                    ->join('materias', 'inscripcion_materia.materia_id', '=', 'materias.id')
                    ->join('role_user as ru', 'materias.role_user_id', '=', 'ru.id')
                    ->join('users as u', 'ru.user_id', '=', 'u.id')
                    ->select('users.*','inscripcion_materia.*')
                    ->where('u.id', '=', $profesor ) 
                    ->get();
        $materias = DB::table('materias')
            ->join('role_user', 'materias.role_user_id', '=', 'role_user.id')
            ->join('users', 'role_user.user_id', '=', 'users.id')
            ->select('materias.*')
            ->where('users.id', '=', $profesor )
            ->get();
        // dd($materias);
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
        return redirect()->route('notas.index')->with('status_success','Notas asignada de manera correcta');
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
        $estudiante =DB::table('inscripcions')
                    ->join('role_user', 'inscripcions.role_user_id', '=', 'role_user.user_id')
                    ->join('users', 'role_user.user_id', '=', 'users.id')
                    ->join('inscripcion_materia', 'inscripcions.id', '=', 'inscripcion_materia.inscripcion_id')
                    ->join('materias', 'inscripcion_materia.materia_id', '=', 'materias.id')
                    ->join('role_user as ru', 'materias.role_user_id', '=', 'ru.id')
                    ->join('users as u', 'ru.user_id', '=', 'u.id')
                    ->select('users.*','inscripcion_materia.*')
                    ->where('u.id', '=', $profesor ) 
                    ->get();
        $materias = DB::table('materias')
                    ->join('role_user', 'materias.role_user_id', '=', 'role_user.id')
                    ->join('users', 'role_user.user_id', '=', 'users.id')
                    ->select('materias.*')
                    ->where('users.id', '=', $profesor )
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
        $estudiante =DB::table('inscripcions')
                    ->join('role_user', 'inscripcions.role_user_id', '=', 'role_user.user_id')
                    ->join('users', 'role_user.user_id', '=', 'users.id')
                    ->join('inscripcion_materia', 'inscripcions.id', '=', 'inscripcion_materia.inscripcion_id')
                    ->join('materias', 'inscripcion_materia.materia_id', '=', 'materias.id')
                    ->join('role_user as ru', 'materias.role_user_id', '=', 'ru.id')
                    ->join('users as u', 'ru.user_id', '=', 'u.id')
                    ->select('users.*','inscripcion_materia.*')
                    ->where('u.id', '=', $profesor ) 
                    ->get();
        $materias = DB::table('materias')
            ->join('role_user', 'materias.role_user_id', '=', 'role_user.id')
            ->join('users', 'role_user.user_id', '=', 'users.id')
            ->select('materias.*')
            ->where('users.id', '=', $profesor )
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
        $notas->update($request->except('_method', '_token'));
        // $notas = Notas::update($request->except('_method', '_token'));
        // $notas->save();
        return redirect()->route('notas.index', compact('notas'))->with('status_success','Notas actualizada de manera correcta');

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
