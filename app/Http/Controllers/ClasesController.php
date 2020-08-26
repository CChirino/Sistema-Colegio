<?php

namespace App\Http\Controllers;

use App\Clase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class ClasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clase = Clase::get()->all();
        return view('admin.clase.index',compact('clase'));    

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profesor = Auth::user()->id;
        $materias = DB::table('users')
                    ->join('role_user', 'users.id', '=', 'role_user.id')
                    ->join('materias', 'role_user.id', '=', 'materias.role_user_id')
                    ->select('users.*', 'role_user.*', 'materias.*')
                    ->where('materias.role_user_id', '=', $profesor )
                    ->get();
        return view('admin.clase.create',compact('materias'));    

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clase = new Clase([
            'nombre_clase'                                  => $request->get('nombre_clase'),
            'link_clase'                                    => $request->get('link_clase'),
            'materia_id'                                    => $request->get('materia_id'),
        ]);    
        $clase->save();
        return redirect()->route('home',compact('clase'))->with('status_success','Evaluacion creada de manera correcta');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clase = Clase::find($id);
        $profesor = Auth::user()->id;
        $materias = DB::table('users')
            ->join('role_user', 'users.id', '=', 'role_user.id')
            ->join('materias', 'role_user.id', '=', 'materias.role_user_id')
            ->select('users.*', 'role_user.*', 'materias.*')
            ->where('materias.role_user_id', '=', $profesor )
            ->get();
        return view('admin.clase.show', compact('clase','materias'));

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
