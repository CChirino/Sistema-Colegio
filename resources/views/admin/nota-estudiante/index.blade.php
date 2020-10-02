@extends('layouts.admin')

@section('titulo', 'Lista de Periodos por Calificaciones')

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
                                <li><a href="#">Calificaciones</a> <span class="bread-slash">/</span>
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
        <div class="col-sm-12">
            <table id="example" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Nombre </th>
                        <th>Año</th>
                        <th>Año Escolar</th>        
                        <th colspan="3">Transacciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($materias as $mat)
                    <tr>
                        <td>{{$mat->nombre}} {{$mat->apellido}} </td>
                        <td>{{$mat->pensum_nombre}}</td>
                        <td>{{$mat->nombre_periodo}}</td>
                        <td><a class="btn btn-info" href="{{ route('notas-estudiante.show',$mat->id) }}"> <i class="far fa-eye"></i> Ver</a></td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div>
        {{-- {{$materias->links()}}  --}}
    </div>
</div>
@endsection