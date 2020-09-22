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
        Gate::authorize('haveaccess','clases-en-linea.index');
        $profesor = Auth::user()->id;
        $clase =  DB::table('clases')
                ->join('materias','clases.materia_id', '=','materias.id')
                ->join('role_user','materias.role_user_id', '=','role_user.id')
                ->join('users','role_user.user_id', '=','users.id')
                ->where('users.id','=',$profesor)
                ->select('clases.id','clases.nombre_clase','clases.link_clase','materias.nombre_materia')
                ->orderBy('clases.id', 'asc')
                ->paginate(7);
        return view('admin.clase.index',compact('clase'));    

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess','clases-en-linea.create');
        $profesor = Auth::user()->id;
        $materias = DB::table('materias')
                    ->join('role_user', 'materias.role_user_id', '=', 'role_user.id')
                    ->join('users', 'role_user.user_id', '=', 'users.id')
                    ->select('materias.*')
                    ->where('users.id', '=', $profesor )
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
        return redirect()->route('clases-en-linea.index',compact('clase'))->with('status_success','Video subido de manera correcta');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Gate::authorize('haveaccess','clases-en-linea.show');
        $clase = Clase::find($id);
        $profesor = Auth::user()->id;
        $materias = DB::table('materias')
                    ->join('role_user', 'materias.role_user_id', '=', 'role_user.id')
                    ->join('users', 'role_user.user_id', '=', 'users.id')
                    ->select('materias.*')
                    ->where('users.id', '=', $profesor )
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
        Gate::authorize('haveaccess','clases-en-linea.edit');
        $clase = Clase::find($id);
        $profesor = Auth::user()->id;
        $materias = DB::table('materias')
                    ->join('role_user', 'materias.role_user_id', '=', 'role_user.id')
                    ->join('users', 'role_user.user_id', '=', 'users.id')
                    ->select('materias.*')
                    ->where('users.id', '=', $profesor )
                    ->get();
        return view('admin.clase.edit',compact('materias','clase'));    
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
        $clase = Clase::find($id);
        $clase->update([
            'nombre_clase'                                  => $request->get('nombre_clase'),
            'link_clase'                                    => $request->get('link_clase'),
            'materia_id'                                    => $request->get('materia_id'),
        ]);    
        $clase->save();
        return redirect()->route('clases-en-linea.index',compact('clase'))->with('status_success','Video modificado de manera correcta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gate::authorize('haveaccess','clases-en-linea.destroy');
        $clase = Clase::find($id);
        $clase ->delete();
        return redirect()->route('clases-en-linea.index')->with('status_success','Video eliminado de manera correcta');
    }
}
