@extends('layouts.admin')

@section('titulo', 'Materia')

@section('content')
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list single-page-breadcome">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <td><a class="btn btn-success" href="{{ route('estudiante.create') }}"> <i class="fas fa-plus-circle"></i> Crear Materia</a></td>    
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="#">Materias</a> <span class="bread-slash">/</span>
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
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Nombre de la Materia</th>
                <th>Año de la materia</th>
                <th colspan="3">Transacciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach($estudiantes as $est)
            <tr>
                <td>
                    <img src="{{ asset('storage/'.$est->image) }}" alt="" srcset="" width="150" >
                </td>
                <td>{{$est->dni}}</td>
                <td>{{$est->nombre}}</td>
                <td>{{$est->apellido}}</td>
                <td>{{$est->direccion}}</td>
                <td>{{$est->fecha_nacimiento}}</td>
                <td>{{$est->email}}</td>
                <td><a class="btn btn-info" href="{{ route('estudiante.show',$est->id) }}" > <i class="far fa-eye"></i> Ver</a></td>
                <td><a class="btn btn-warning" href="{{ route('estudiante.edit',$est->id) }}"> <i class="far fa-edit"></i> Editar</a></td>
                <td>
                <form action="{{ route('estudiante.destroy',$est->id) }}" method="post">
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
        {{$estudiantes->links()}} 
    </div>
</div>
@endsection