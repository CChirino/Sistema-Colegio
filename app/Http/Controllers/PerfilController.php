<?php

namespace App\Http\Controllers;
use App\User;
use App\Pensum;
use App\Periodo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



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
        $perfil = Auth::user()->id;
        $roles = DB::table('role_user')
                ->join('users','role_user.user_id', '=','users.id')
                ->join('roles','role_user.role_id', '=','roles.id')
                ->where('users.id','=',$perfil )
                ->select('roles.*')
                ->get();
        return view('admin.perfil.index', compact('pensum','periodo','roles','perfil'));

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
                'image'             => $request->image->storeAs('images',$filename,'public'),
                ]);
        }
        else{
            $user->update([
                // 'dni'               => $request->dni,
                'nombre'            => $request->nombre,
                'apellido'          => $request->apellido,
                'direccion'         => $request->direccion,
                'fecha_nacimiento'  => $request->fecha_nacimiento,
                // 'email'             => $request->email,
                // 'image'             => $request->image->storeAs('images',$filename,'public'),
                ]);
        }
        // dd($user);
        return redirect()->route('home')->with('status_success','Usuario actualizado de manera correcta');
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
