<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Pensum;
use App\User;


class ListadoestudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        Gate::authorize('haveaccess','listado-estudiantes.index');
        // $buscar = $request->get('search'); 
        $profesor = Auth::user()->id;
        $materias = DB::table('materias')
                    ->join('role_user', 'materias.role_user_id', '=', 'role_user.id')
                    ->join('users', 'role_user.user_id', '=', 'users.id')
                    ->where('users.id', '=', $profesor )
                    ->select('materias.*')
                    ->paginate(7);
        return view('admin.listar-estudiantes.index', compact('materias'));

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
    public function show($id, Request $request)
    {
        Gate::authorize('haveaccess','listado-estudiantes.show');
        // $pensum = Pensum::get();
        // $year = $request->get('search');
        $profesor = Auth::user()->id;
        $lista = DB::table('inscripcions')
                 ->join('inscripcion_materia', 'inscripcions.id', '=', 'inscripcion_materia.inscripcion_id')
                 ->join('role_user', 'inscripcions.role_user_id', '=', 'role_user.user_id')
                 ->join('users', 'role_user.user_id', '=', 'users.id')
                 ->join('materias', 'inscripcion_materia.materia_id', '=', 'materias.id')
                 ->join('role_user as ru', 'materias.role_user_id', '=', 'ru.id')
                 ->join('users as u', 'ru.user_id', '=', 'u.id')
                 ->join('pensums','inscripcions.pensum_id','=','pensums.id')
                 ->where('u.id', '=', $profesor )
                 ->where('materias.id', '=', $id)
                //  ->where('pensums.pensum_nombre', 'LIKE',$year)
                 ->select('users.*','pensums.pensum_nombre')
                 ->paginate(7);
        return view('admin.listar-estudiantes.show', compact('lista',));

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
