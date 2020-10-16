<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class CoordinacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        Gate::authorize('haveaccess','horarios.index');
        $nombre = $request->get('search'); 
        $coordinador = DB::table('users')
                ->join('role_user','users.id', '=','role_user.user_id')
                ->where('role_id','=',5)
                ->where('users.nombre','LIKE','%'.$nombre.'%')
                ->select('users.id','users.dni','users.nombre','users.apellido','users.direccion','users.fecha_nacimiento','users.email','users.image')
                ->paginate(30);
        return view('admin.coordinador.index', compact('coordinador','nombre'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess','horarios.create');
        return view('admin.coordinador.create');
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
            'image'             => ['image', 'mimes:jpg,jpeg,png', 'max:5000' ]
        ]);
        $role = Role::find(5); //Rol Profesor
        if($request->hasFile('image')){
            $filename = $request->image->getClientOriginalName();
            $role->users()->create([
                'dni'               => $request->dni,
                'nombre'            => $request->nombre,
                'apellido'          => $request->apellido,
                'direccion'         => $request->direccion,
                'fecha_nacimiento'  => $request->fecha_nacimiento,
                'email'             => $request->email,
                'password'          => Hash::make($request->password),
                'image'             => $request->image->storeAs('images',$filename,'public'),
            ]);
            
        }

        return redirect()->route('coordinador.index')->with('status_success','Usuario creado de manera correcta');      
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
        $coordinador = User::find($id);
        return view('admin.coordinador.show', compact('coordinador'));
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
        $coordinador = User::find($id);
        return view('admin.coordinador.edit', compact('coordinador'));
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
        $coordinador = User::find($id);
        // $profesores = request()->except(['_token','_method']);
        if($request->hasFile('image')){
            $filename = $request->image->getClientOriginalName();
            $coordinador->update([
                // 'dni'               => $request->dni,
                'nombre'            => $request->nombre,
                'apellido'          => $request->apellido,
                'direccion'         => $request->direccion,
                'fecha_nacimiento'  => $request->fecha_nacimiento,
                // 'email'             => $request->email,
                // 'password'          => Hash::make($request->password),
                'image'             => $request->image->storeAs('images',$filename,'public'),
                ]);
        }else{
            $coordinador->update([
                // 'dni'               => $request->dni,
                'nombre'            => $request->nombre,
                'apellido'          => $request->apellido,
                'direccion'         => $request->direccion,
                'fecha_nacimiento'  => $request->fecha_nacimiento,
                // 'email'             => $request->email,
                // 'password'          => Hash::make($request->password),
                ]);
        }
        return redirect()->route('coordinador.index')->with('status_success','Usuario actualizado de manera correcta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gate::authorize('haveaccess','horarios.destroy');
        $coordinador = User::find($id);
        $coordinador ->delete();
        return redirect()->route('coordinador.index')->with('status_success','Usuario eliminado de manera correcta');
    }
}
