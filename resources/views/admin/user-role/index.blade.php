@extends('layouts.admin')

@section('titulo', 'Lista de Roles')

@section('content')
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list single-page-breadcome">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                {{-- <td><a class="btn btn-success" href="{{ route('roles.create') }}"> <i class="fas fa-plus-circle"></i> Crear Role</a></td>     --}}
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="#">Usuarios por role</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">@yield('titulo')</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Static Table Start -->
<div class="container">
    @include('custom.message')
    <table id="example" class="table table-striped table-bordered " style="width:100%">
        <thead>
            <tr>
                <th>Cedula</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Rol</th>
                <th colspan="3">Transacciones</th>

            </tr>
        </thead>
        <tbody>
                @foreach($users as $user)
            <tr>
                <td>{{$user->dni}}</td>
                <td>{{$user->nombre}}</td>
                <td>{{$user->apellido}}</td>
                <td>
                    @isset( $user->roles[0]->name )
                    {{ $user->roles[0]->name}}
                  @endisset
                </td>
                <td><a class="btn btn-warning" href="{{ route('usuario-rol.edit',$user->id) }}"> <i class="far fa-edit"></i> Editar</a></td>
                
            </tr>
            @endforeach
            {{-- <tr>
                @foreach($users as $user)
                @endforeach
            </tr> --}}
        </tbody>
    </table>
    <div>
        {{$users->links()}} 
    </div>
</div>
@endsection