<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Role;
use App\Permission;
use Illuminate\Support\Facades\Gate;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','roles.index');
        
        $role = Role::orderBy('id')->paginate(4);
        return view('admin.roles.index', compact('role'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess','roles.create');
        $permiso = Permission::get();
        return view ('admin.roles.create', compact('permiso'));
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
            'name'=>'required|max:50',
            'full-access'=>'required|in:si,no'
        ]);
        $role = Role::create($request->all());
        $role->permissions()->sync($request->get('permission'));
        $role->save();
        return redirect()->route('roles.index')->with('status_success','Role creado de manera correcta');        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        Gate::authorize('haveaccess','roles.show');
        $permission_role=[];

        foreach($role->permissions as $permission) {
            $permission_role[]=$permission->id; 
        }

        $permiso = Permission::get();

        return view('admin.roles.show', compact('permiso','role','permission_role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        Gate::authorize('haveaccess','roles.edit');

        $permission_role=[];

        foreach($role->permissions as $permission) {
            $permission_role[]=$permission->id; 
        }
        $permiso = Permission::get();
        return view ('admin.roles.edit', compact('permiso','role','permission_role'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name'=>'required|max:50',
            'full-access'=>'required|in:si,no'
        ]);
        $role->update($request->all());
        $role->permissions()->sync($request->get('permission'));
        $role->save();
        return redirect()->route('roles.index')->with('status_success','Role actualizado de manera correcta');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        Gate::authorize('haveaccess','roles.destroy');

        $role->delete();

        return redirect()->route('roles.index')->with('status_success','Role eliminado de manera correcta');
    }
}
