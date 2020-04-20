<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profesores = DB::table('users')
                    ->join('role_user','users.id', '=','role_user.user_id')
                    ->where('role_id','=',3)
                    ->select('users.id','users.dni','users.nombre','users.apellido','users.direccion','users.fecha_nacimiento','users.email','users.foto')
                    ->paginate(7);
        return view('admin.profesor.index-profesor', compact('profesores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.profesor.create');

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
            'dni'               => ['required', 'integer'],
            'nombre'            => ['required', 'string', 'max:255'],
            'apellido'          => ['required', 'string', 'max:255'],
            'direccion'         => ['required', 'string', 'max:255'],
            'fecha_nacimiento'  => ['required', 'date'],
            'email'             => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'          => ['required', 'string', 'min:8', 'confirmed'],
            'foto'              => ['image', 'mimes:jpg,jpeg,png', 'max:5000' ]
        ]);

        $role = Role::find(3); //Rol Profesor
        $role->users()->create([
            'dni'               => $request->dni,
            'nombre'            => $request->nombre,
            'apellido'          => $request->apellido,
            'direccion'         => $request->direccion,
            'fecha_nacimiento'  => $request->fecha_nacimiento,
            'email'             => $request->email,
            'password'          => Hash::make($request->password),
            'foto'             => $request->foto,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->store('public');
        }
        // return back()->with('success', '¡Usuario creado con éxito!');
        return redirect()->route('profesor.index');        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profesores = User::find($id);
        return view('admin.profesor.show', compact('profesores'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profesores = User::find($id);
        return view('admin.profesor.edit', compact('profesores'));
    
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
        $profesores = request()->except(['_token','_method','foto']);
        User::where('id', '=', $id)->update($profesores);
        if($request->hasFile('foto')){
            $request->file('foto')->store('public');
        }
        // $profesores = User::find($id);
        return redirect()->route('profesor.index')->with('datos','Registro actualizado correctamente!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profesores = User::find($id);
        $profesores ->delete();
        return redirect()->route('profesor.index')->with('datos','Registro eliminado correctamente!');

    }
}
