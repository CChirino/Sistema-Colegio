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
                                {{-- <td><a class="btn btn-success" href="{{ route('listar-evaluaciones.index') }}"> <i class="fas fa-plus-circle"></i> Ver Evalauciones </a></td>     --}}
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
                <th>Nombre de estudiante</th>
                <th>Materia</th>
                <th colspan="3">Transacciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach($listarevaluaciones as $le)
            <tr>
                <td>{{$le->nombre}} {{$le->apellido}}</td>
                <td>{{$le->nombre_materia}}</td>
            @endforeach
            @foreach($subirevaluaciones as $se)
                <td><a class="btn btn-info" href="{{ route('subir-evaluacion-estudiante.show',$se->id) }}"> <i class="far fa-eye"></i> Ver</a></td>
            @endforeach
            </tr>
        </tbody>
    </table>
    <div>
        {{-- {{$materias->links()}}  --}}
    </div>
</div>
@endsection