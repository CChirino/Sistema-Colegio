<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','admin.index');
        $admin = DB::table('users')
                    ->join('role_user','users.id', '=','role_user.user_id')
                    ->where('role_id','=',1)
                    ->select('users.id','users.dni','users.nombre','users.apellido','users.direccion','users.fecha_nacimiento','users.email','users.image')
                    ->paginate(7);
        return view('admin.admin.index', compact('admin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess','admin.create');
        return view('admin.admin.create');
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

        $role = Role::find(1); //Rol Admin
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
            
        // return back()->with('success', '¡Usuario creado con éxito!');
        return redirect()->route('admin.index')->with('status_success','Usuario creado de manera correcta'); 
        ;  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Gate::authorize('haveaccess','admin.show');
        $admin = User::find($id);
        return view('admin.admin.show', compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Gate::authorize('haveaccess','admin.edit');
        $admin = User::find($id);
        return view('admin.admin.edit', compact('admin'));
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
        $admin = User::find($id);
        if($request->hasFile('image')){
            $filename = $request->image->getClientOriginalName();
            $admin->update([
                // 'dni'               => $request->dni,
                'nombre'            => $request->nombre,
                'apellido'          => $request->apellido,
                'direccion'         => $request->direccion,
                'fecha_nacimiento'  => $request->fecha_nacimiento,
                // 'email'             => $request->email,
                'password'          => Hash::make($request->password),
                'image'             => $request->image->storeAs('images',$filename,'public'),
                ]);
        }
        return redirect()->route('admin.index')->with('status_success','Usuario actualizado de manera correcta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gate::authorize('haveaccess','admin.destroy');
        $admin = User::find($id);
        $admin ->delete();
        return redirect()->route('admin.index')->with('status_success','Usuario eliminado de manera correcta');
    }
}
