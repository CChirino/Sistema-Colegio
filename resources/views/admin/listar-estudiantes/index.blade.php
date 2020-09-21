@extends('layouts.admin')

@section('titulo', 'Lista de Estudiantes')

@section('content')
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list single-page-breadcome">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="breadcome-heading">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="breadcome-heading">
                                {{-- <form role="buscar" class="sr-input-func">

                                    <select name="buscar" id="buscar">

                                    </select>
                                </form>                             --}}
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <ul class="breadcome-menu">
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
    <div>
        <form action=""></form>
    </div>
    <table id="example" class="table table-striped table-bordered "  style="width:100%">
        <thead>
            <tr>
                <th>Materia</th>
                <th colspan="3">Transacciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($materias as $materia)
            <tr>
                <td>{{$materia->nombre_materia}}</td>
                <td><a class="btn btn-info" href="{{ route('listado-estudiantes.show',$materia->id) }}"> <i class="far fa-eye"></i> Ver</a></td>
            @endforeach
            </tr>
        </tbody>
    </table>
    <div>
        {{$materias->links()}} 
    </div>
</div>
@endsection