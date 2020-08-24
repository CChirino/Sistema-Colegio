@extends('layouts.admin')

@section('titulo', 'Lista de Colegios')

@section('content')
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list single-page-breadcome">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <td><a class="btn btn-success" href="{{ route('colegio.create') }}"> <i class="fas fa-plus-circle"></i> Crear Usuario Colegio </a></td>    
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="#">Colegios</a> <span class="bread-slash">/</span>
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
    <table id="example" class="table table-striped table-bordered table-responsive" style="width:100%">
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
            @foreach($colegio as $col)
            <tr>
                <td>
                    <img src="{{ asset('storage/'.$col->image) }}" alt="" srcset="" width="150" height="150" >
                </td>
                <td>{{$col->dni}}</td>
                <td>{{$col->nombre}}</td>
                <td>{{$col->apellido}}</td>
                <td>{{$col->direccion}}</td>
                <td>{{$col->fecha_nacimiento}}</td>
                <td>{{$col->email}}</td>
                <td><a class="btn btn-info" href="{{ route('colegio.show',$col->id) }}"" > <i class="far fa-eye"></i> Ver</a></td>
                <td><a class="btn btn-warning" href="{{ route('colegio.edit',$col->id) }}""> <i class="far fa-edit"></i> Editar</a></td>
                <td>
                <form action="{{ route('colegio.destroy',$col->id) }}" method="post">
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
        {{$colegio->links()}} 
    </div>
</div>
@endsection