@extends('layouts.admin')

@section('titulo', 'Lista de Usuario en Papelera')

@section('content')
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list single-page-breadcome">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="breadcome-heading">
                                {{-- <td><a class="btn btn-success" href="{{ route('admin.create') }}"> <i class="fas fa-plus-circle"></i> Crear Administrador </a></td>     --}}
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="#">Usuarios</a> <span class="bread-slash">/</span>
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
    <table id="example" class="table table-striped table-bordered table-responsive " style="width:100%">
        <thead>
            <tr>
                <th>Foto</th>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Direccion</th>
                <th>Fecha de Nacimiento</th>
                <th>Email</th>
                <th colspan="3">Transacciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($user as $u)
            <tr>
                <td>
                    <img src="{{ asset('storage/'.$u->image) }}" alt="" srcset="" width="150" height="150" >
                </td>
                <td>{{$u->dni}}</td>
                <td>{{$u->nombre}}</td>
                <td>{{$u->apellido}}</td>
                <td>{{$u->direccion}}</td>
                <td>{{$u->fecha_nacimiento}}</td>
                <td>{{$u->email}}</td>
                <td>
                <form action="{{ route('usuarios.restaurar',$u->id) }}" method="post">
                    @csrf
                    @method('POST')
                    <button  class="btn btn-danger" type="submit" onclick="return confirm('Desea Restaurar?');" >
                        <i class="fas fa-trash"></i> 
                        Restaurar
                    </button>
                </form>
                </td>
                @endforeach
            </tr>
        </tbody>
    </table>
</div>
@endsection