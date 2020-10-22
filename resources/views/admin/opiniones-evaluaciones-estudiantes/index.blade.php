@extends('layouts.admin')

@section('titulo', 'Lista de Opiniones de Evaluaciones')

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
                                <li><a href="#">Opiniones</a> <span class="bread-slash">/</span>
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
        <div class="col-sm-12" >
            <table id="example" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Materia</th>     
                        <th>Evaluación</th>     
                        <th>Opinion</th>
                        <th colspan="3">Transacciones</th> 
                    </tr>
                </thead>
                <tbody>
                    @foreach($listarevaluaciones as $le)
                    <tr>
                        <td>{{$le->nombre_materia}}</td>
                        <td>{{$le->nombre_evaluacion}}</td>
                        <td>{{$le->opinion}}</td>
                        <td><a class="btn btn-info" href="{{ route('opinion-evaluaciones-estudiantes.show',$le->id) }}"> <i class="far fa-eye"></i> Ver</a></td>
                        <td>
                            <form action="{{ route('opinion-evaluaciones-estudiantes.destroy',$le->id) }}" method="post">
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
        </div>
    </div>
    <div>
    {{$listarevaluaciones->links()}}
    </div>
</div>
@endsection