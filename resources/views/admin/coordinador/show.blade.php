@extends('layouts.admin')

@section('titulo', 'Ver Coordinador')

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
                                <li><a href="#">Coordinador</a> <span class="bread-slash">/</span>
                                </li>
                                <li><a href="#">@yield('titulo')</a> <span class="bread-slash">/</span>
                                </li>
                            <li><span class="bread-blod">{{$coordinador->nombre}}</span>
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
                    <div class="form-group col-lg-6">
                        <label>Foto de Perfil</label> <br>
                    <img src="{{ asset('storage/'.$coordinador->image) }}" alt="" width="300px" class="mb-2" >    
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Cedula de Identidad</label>
                        <input type="number" id="dni"  class="form-control" name="dni" value="{{$coordinador->dni}}" disabled>
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Nombre</label>
                        <input type="text" id="nombre" class="form-control" name="nombre" value="{{$coordinador->nombre}}" disabled>
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Apellido</label>
                        <input type="text" id="apellido" class="form-control" name="apellido" value="{{$coordinador->apellido}}" disabled>

                    </div>
                    <div class="form-group col-lg-12">
                        <label>Direccion</label>
                        <input type="text" id="direccion" class="form-control"  name="direccion" value="{{$coordinador->direccion}}" disabled>
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Fecha de Ingreso </label>
                        <input  id="fecha_nacimiento" class="form-control" name="fecha_nacimiento" value="{{$coordinador->fecha_nacimiento}} " disabled>
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Correo Electronico</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{$coordinador->email}}" disabled>
                    </div>
                </div>
                <div class="text-center">
                    <a href="{{ route('coordinador.index')}}" class="btn btn-success loginbtn"> Regresar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection