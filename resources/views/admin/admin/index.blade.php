@extends('layouts.admin')

@section('titulo', 'Lista de Administradores')

@section('content')
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list single-page-breadcome">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="breadcome-heading">
                                <td><a class="btn btn-success" href="{{ route('admin.create') }}"> <i class="fas fa-plus-circle"></i> Crear Administrador </a></td>    
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="breadcome-heading">
                                <form role="search" class="sr-input-func">
                                <input type="text" placeholder="Buscar..." class="search-int form-control" name="search" value="{{$nombre}}">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </form>                            
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="#">Administradores</a> <span class="bread-slash">/</span>
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
    <h6>
        @if ($nombre)
        <div class="alert alert-primary" role="alert">
        Los resultados para la busqueda '{{$nombre}}' son:
        </div>
        @endif
    </h6>
    <table id="example" class="table table-striped table-bordered table-responsive"  style="width:100%">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Cedula de Identidad</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Direccion</th>
                <th>Fecha de Ingreso</th>
                <th>Email</th>
                <th colspan="3">Transacciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach($admin as $ad)
            <tr>
                <td>
                    <img src="{{ asset('storage/'.$ad->image) }}" alt="" srcset="" width="150" height="150" >
                </td>
                <td>{{$ad->dni}}</td>
                <td>{{$ad->nombre}}</td>
                <td>{{$ad->apellido}}</td>
                <td>{{$ad->direccion}}</td>
                <td>{{$ad->fecha_nacimiento}}</td>
                <td>{{$ad->email}}</td>
                <td><a class="btn btn-info" href="{{ route('admin.show',$ad->id) }}"> <i class="far fa-eye"></i> Ver</a></td>
                <td><a class="btn btn-warning" href="{{ route('admin.edit',$ad->id) }}"> <i class="far fa-edit"></i> Editar</a></td>
                <td>
                <form action="{{ route('admin.destroy',$ad->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button  class="btn btn-danger" type="submit" onclick="return confirm('Desea Borrar?');" >
                        <i class="fas fa-trash"></i> 
                        Eliminar
                    </button>
                </form>
                </td>
                @endforeach
            </tr>
        </tbody>
    </table>
    <div>
        {{$admin->links()}} 
    </div>
</div>
@endsection