@extends('layouts.admin')

@section('titulo', 'Lista de Materias')

@section('content')
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list single-page-breadcome">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="breadcome-heading">
                                <td><a class="btn btn-success" href="{{ route('materias.create') }}"> <i class="fas fa-plus-circle"></i> Crear Materia</a></td>    
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
    @include('custom.message')
    <h6>
        @if ($nombre)
        <div class="alert alert-primary" role="alert">
        Los resultados para la busqueda '{{$nombre}}' son:
        </div>
        @endif
    </h6>
    <div class="row">
        <div class="col-sm-12">
            <table id="example" class="table table-striped table-bordered ">
                <thead>
                    <tr>
                        <th>Nombre de Materia</th>
                        <th>Año</th>
                        <th>Periodo</th>
                        <th>Profesor</th>
                        <th colspan="3">Transacciones</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($lista_materias as $lm)
                    <tr>
                        <td>{{$lm->nombre_materia}}</td>
                        <td>{{$lm->pensum_nombre}}</td>
                        <td>{{$lm->nombre_periodo}}</td> 
                        <td>{{$lm->nombre}} {{$lm->apellido}}</td> 
                        <td><a class="btn btn-warning" href="{{ route('materias.edit',$lm->id) }}"> <i class="far fa-edit"></i> Editar</a></td>
                        <td>
                        <form action="{{route('materias.destroy',$lm->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button  class="btn btn-danger" type="submit" onclick="return confirm('Desea Borrar?');" >
                                <i class="fas fa-trash"></i> 
                                Eliminar
                            </button>
                        </form>
                        </td>
                        {{-- <td><a class="btn btn-info" href="{{ route('materias.show',$mat->id) }}" > <i class="far fa-eye"></i> Ver</a></td> --}}
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
        <div>
        {{$materias->links()}} 
        </div>

    </div>
</div>
@endsection