@extends('layouts.admin')

@section('titulo', 'Ver Colegio')

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
                                <li><a href="#">Colegio</a> <span class="bread-slash">/</span>
                                </li>
                                <li><a href="#">@yield('titulo')</a> <span class="bread-slash">/</span>
                                </li>
                            <li><span class="bread-blod">{{$colegio->nombre}}</span>
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
                        <label>DNI</label>
                        <input type="number" id="dni"  class="form-control" name="dni" value="{{$colegio->dni}}" disabled>
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Nombre</label>
                        <input type="text" id="nombre" class="form-control" name="nombre" value="{{$colegio->nombre}}" disabled>
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Apellido</label>
                        <input type="text" id="apellido" class="form-control" name="apellido" value="{{$colegio->apellido}}" disabled>

                    </div>
                    <div class="form-group col-lg-12">
                        <label>Direccion</label>
                        <input type="text" id="direccion" class="form-control"  name="direccion" value="{{$colegio->direccion}}" disabled>
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Fecha de Nacimiento </label>
                        <input  id="fecha_nacimiento" class="form-control" name="fecha_nacimiento" value="{{$colegio->fecha_nacimiento}} " disabled>
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Correo Electronico</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{$colegio->email}}" disabled>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit"  class="btn btn-success loginbtn"> <a href="{{ route('colegio.index')}}"> Regresar</a> </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection