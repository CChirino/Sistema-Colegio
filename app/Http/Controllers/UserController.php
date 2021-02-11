<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        Gate::authorize('haveaccess','usuarios.index');
        $nombre = $request->get('search'); 
        $user = DB::table('users')
                ->where('users.nombre','LIKE','%'.$nombre.'%')
                ->select('users.*')
                ->paginate(30);
        return view('admin.user.index', compact('user','nombre'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess','usuarios.create');
        return view('admin.user.create');
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
        if($request->hasFile('image')){
            $filename = $request->image->getClientOriginalName();
            $user = new User([
                'dni'                               => $request->get('dni'),
                'nombre'                            => $request->get('nombre'),
                'apellido'                          => $request->get('apellido'),
                'direccion'                         => $request->get('direccion'),
                'fecha_nacimiento'                          => $request->get('fecha_nacimiento'),
                'email'                              => $request->get('email'),
                'password'                          => $request->get('password'),
                'image'                          => $request->image->storeAs('images',$filename,'public'),
                ]);
        }
        $user->save();
        return redirect()->route('user.index')->with('status_success','Usuario creado de manera correcta');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Gate::authorize('haveaccess','usuarios.show');
        $user = User::find($id);
        return view('admin.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Gate::authorize('haveaccess','usuarios.edit');
        $user = User::find($id);
        return view('admin.user.edit',compact('user'));
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
        $user = User::find($id);
        if($request->hasFile('image')){
            $filename = $request->image->getClientOriginalName();
            $user->update([
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
        else{
            $user->update([
                'dni'               => $request->dni,
                'nombre'            => $request->nombre,
                'apellido'          => $request->apellido,
                'direccion'         => $request->direccion,
                'fecha_nacimiento'  => $request->fecha_nacimiento,
                'email'             => $request->email,
                'password'          => Hash::make($request->password),
                ]);
        }
        return redirect()->route('usuarios.index')->with('status_success','Usuario actualizado de manera correcta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gate::authorize('haveaccess','usuarios.destroy');
        $user = User::find($id);
        $user->delete();
        return redirect()->route('usuarios.index')->with('status_success','Usuario eliminado de manera correcta');
        if($user !=null){
            $user->delete();
            return redirect()->route('usuarios.index')->with('status_success','Usuario eliminado de manera correcta');
        }

    }

}
