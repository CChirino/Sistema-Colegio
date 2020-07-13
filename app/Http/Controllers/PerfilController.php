<?php

namespace App\Http\Controllers;
use App\User;
use App\Pensum;
use App\Periodo;
use App\Role;
use Illuminate\Support\Facades\Hash;


use Illuminate\Http\Request;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $pensum = Pensum::get();
        $periodo = Periodo::get();
        $role = Role::get();
        return view('admin.perfil.index', compact('pensum','periodo','role'));
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.perfil.edit',compact('user'));

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
        return redirect()->route('perfil.index')->with('datos','Registro actualizado correctamente!');;
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
