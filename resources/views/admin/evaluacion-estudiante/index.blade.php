@extends('layouts.admin')

@section('titulo', 'Lista de Evaluaciones')

@section('content')
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list single-page-breadcome">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="#">Evaluaciones</a> <span class="bread-slash">/</span>
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
                <th>Materia</th>
                <th>Nombre Evaluacion</th>
                <th>Fecha de Inicio</th>
                <th>Fecha Fin</th>
                <th colspan="3">Transacciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach($evaluaciones as $eval)
            <tr>
                <td>{{$eval->nombre_materia}}</td>
                <td>{{$eval->nombre_evaluacion}}</td>
                <td>{{$eval->fecha_inicio}}</td>
                <td>{{$eval->fecha_fin}}</td>
                {{-- <td><a class="btn btn-info" href="{{ route('evaluacion-estudiante.show',$eval->${$evaluacion.'id'}) }}"> <i class="far fa-eye"></i> Ver Evaluacion</a></td>                 --}}
                <td><a class="btn btn-warning" href="{{ route('subir-evaluacion-estudiante.create') }}"> <i class="far fa-edit"></i> Subir Evaluacion </a></td>
            @endforeach
            @foreach($evaluacion as $eva)
                <td><a class="btn btn-info" href="{{ route('evaluacion-estudiante.show',$eva->id) }}"> <i class="far fa-eye"></i> Ver Evaluacion</a></td>                
            @endforeach
            
                {{-- <td><a class="btn btn-warning" href="{{ route('listar-evaluaciones.edit',$eval->id) }}"> <i class="far fa-edit"></i> Editar</a></td> --}}
                {{-- <td>
                    <form action="{{ route('admin.destroy',$eval->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button  class="btn btn-danger" type="submit" onclick="return confirm('Desea Borrar?');" >
                            <i class="fas fa-trash"></i> 
                            Eliminar
                        </button>
                    </form>
                </td> --}}
            </tr>
        </tbody>
    </table>
    <div>
        {{-- {{$materias->links()}}  --}}
    </div>
</div>
@endsection