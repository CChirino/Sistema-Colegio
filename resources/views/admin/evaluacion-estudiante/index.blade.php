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
                                <a class="btn btn-warning" href="{{ route('subir-evaluacion-estudiante.create') }}"> <i class="far fa-edit"></i> Subir Evaluacion </a>
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
    <div class="row">
        <div class="col-9" style="width:100%;padding-right: 0px;padding-left: 0px;">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Materia</th>
                        <th>Nombre Evaluacion</th>
                        <th>Fecha de Inicio</th>
                        <th>Fecha Fin</th>        
                    </tr>
                </thead>
                <tbody>
                    @foreach($evaluaciones as $eval)
                    <tr>
                        <td style="padding: 19px;">{{$eval->nombre_materia}}</td>
                        <td>{{$eval->nombre_evaluacion}}</td>
                        <td>{{$eval->fecha_inicio}}</td>
                        <td>{{$eval->fecha_fin}}</td>
                    @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-3" style="width:100%;padding-right: 0px;padding-left: 0px;">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th colspan="3">Transacciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($evaluacion as $eval)
                    <tr>
                        <td><a class="btn btn-info" href="{{ route('evaluacion-estudiante.show',$eval->id) }}"> <i class="far fa-eye"></i> Ver Evaluacion</a></td>                
                    </tr>
                    @endforeach 
                </tbody>
            </table>
        </div>
    </div>

    <div>
        {{$evaluacion->links()}}
    </div>
</div>
@endsection