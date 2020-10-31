@extends('layouts.admin')

@section('titulo', 'Lista de Evaluaciones')

@section('content')
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list single-page-breadcome">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="breadcome-heading">
                                {{-- <td><a class="btn btn-success" href="{{ route('listar-evaluaciones.index') }}"> <i class="fas fa-plus-circle"></i> Ver Evalauciones </a></td>     --}}
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
    <div class="row">
        @include('custom.message')
        <h6>
            @if ($nombre)
            <div class="alert alert-primary" role="alert">
            Los resultados para la busqueda '{{$nombre}}' son:
            </div>
            @endif
        </h6>
        <div class="col-sm-12" >
            <table id="example" class="table table-responsive table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Archivo de Evaluacion</th>
                        <th>Nombre de Archivo</th>     
                        <th>Comentario</th>     
                        <th colspan="3">Transacciones</th>      
                    </tr>
                </thead>
                <tbody>
                    @foreach($evaluaciones as $e)
                    <tr>
                        <td>{{$e->archivo_evaluacion}}</td>
                        <td>{{$e->nombre_archivo}}</td>
                        <td>{{$e->comentario}}</td>
                        <td><a class="btn btn-info" href="{{ route('subir-evaluacion-admin.show',$e->id) }}"> <i class="far fa-eye"></i> Ver</a></td>
                        {{-- <td>
                            <form action="{{ route('subir-evaluacion-estudiante.destroy',$le->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button  class="btn btn-danger" type="submit" onclick="return confirm('Desea Borrar?');" >
                                    <i class="fas fa-trash"></i> 
                                    Eliminar
                                </button>
                            </form>
                        </td> --}}
                    @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div>
    {{-- {{$listarevaluaciones->links()}} --}}
    </div>
</div>
@endsection