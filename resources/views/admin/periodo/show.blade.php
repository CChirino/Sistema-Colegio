@extends('layouts.admin')

@section('titulo', 'Ver Periodo')

@section('content')
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list single-page-breadcome">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <form role="search" class="sr-input-func">
                                    <input type="text" placeholder="Search..." class="search-int form-control">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="#">Periodos</a> <span class="bread-slash">/</span>
                                </li>
                                <li><a href="#">@yield('titulo')</a> <span class="bread-slash">/</span>
                                </li>
                            <li><span class="bread-blod">{{$periodo->nombre_periodo}}</span>
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
<div class="content-error">
    <div class="hpanel">
        <div class="panel-body">
            <form >
                @csrf
                @method('put')
                <div class="row">
                    <div class="form-group col-lg-12">
                        <label>NNombre de Periodo </label>
                        <input type="text" id="nombre_periodo"  class="form-control" name="nombre_periodo"  value="{{ $periodo->nombre_periodo }}" disabled>
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Fecha de inicio </label>
                        <input type="date" id="fecha_inicio" class="form-control" name="fecha_inicio" value="{{ $periodo->fecha_inicio}}" disabled>
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Fecha de fin </label>
                        <input type="date" id="fecha_fin" class="form-control" name="fecha_fin" value="{{ $periodo->fecha_fin}}" disabled>
                    </div>
                </div>
                <div class="text-center">
                    <a href="{{ route('periodos.index')}}" class="btn btn-success loginbtn"> Regresar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection