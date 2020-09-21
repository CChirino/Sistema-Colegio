<?php

namespace App\Http\Controllers;
use App\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;


class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','permisos.index');
        $permisos = Permission::all();        
        $permisos = Permission::paginate(7);
        return view('admin.permiso.index', compact('permisos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess','permisos.create');
        return view('admin.permiso.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $permisos = new Permission([
            'name'                                  => $request->get('name'),
            'slug'                                  => $request->get('slug'),
            'description'                           => $request->get('description'),
        ]);
        $permisos->save();
        return redirect()->route('permisos.index')->with('status_success','Permiso creado de manera correcta');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Gate::authorize('haveaccess','permisos.show');
        $permisos = Permission::find($id);
        return view('admin.permiso.show', compact('permisos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Gate::authorize('haveaccess','permisos.edit');
        $permisos = Permission::find($id);
        return view('admin.permiso.edit',compact('permisos'));
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
        $permisos = Permission::find($id);
        $permisos->update($request->all());
        return redirect()->route('permisos.index')->with('status_success','Permiso actualizado de manera correcta');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $permisos = Permission::find($id);
        $permisos ->delete();
        return redirect()->route('permisos.index')->with('status_success','Permiso eliminado de manera correcta');
    }
}
