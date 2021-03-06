@extends('layouts.admin')

@section('titulo', 'Lista de Clase en linea')

@section('content')
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list single-page-breadcome">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            {{-- <div class="breadcome-heading">
                                <td><a class="btn btn-success" href="{{ route('clases-en-linea.create') }}"> <i class="fas fa-plus-circle"></i> Crear Clase En linea </a></td>    
                            </div> --}}
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="#">Clase en Linea</a> <span class="bread-slash">/</span>
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
    <div class="row">
        <div class="col-sm-12">
            <table id="example" class="table table-striped table-bordered ">
                <thead>
                    <tr>
                        <th>Nombre del video</th>
                        <th>Materia</th>    
                        <th colspan="3">Transacciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($verclases as $vclass)
                    <tr>
                        <td style="padding: 19px;">{{$vclass->nombre_clase}}</td>
                        <td>{{$vclass->nombre_materia}}</td>
                        <td><a class="btn btn-info" href="{{ route('ver-clase-en-linea.show',$vclass->id) }}"> <i class="far fa-eye"></i> Ver</a></td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    {{$verclases->links()}}
</div>
@endsection