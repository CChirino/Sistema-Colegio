@extends('layouts.admin')

@section('titulo', 'Ver Administrador')

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
                                <li><a href="#">Administrador</a> <span class="bread-slash">/</span>
                                </li>
                                <li><a href="#">@yield('titulo')</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">{{$admin->nombre}}</span>
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
        @include('custom.message')
        <div class="panel-body">
        <form action="{{route('admin.update',$admin->id)}}" method="POST" enctype="multipart/form-data" >
                @csrf
                @method('put')
                <div class="row">
                    <div class="form-group col-lg-6">
                            <label>Foto de Perfil</label> <br>
                        <img src="{{ asset('storage/'.$admin->image) }}" alt="" width="300px" class="mb-2" >
                        <input id="image" type="file" class="form-control" name="image" value="{{$admin->image}}"> <br>
    
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Cedula de Identidad</label>
                        <input type="number" id="dni"  class="form-control" name="dni" value="{{$admin->dni}}" disabled >
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Nombre</label>
                        <input type="text" id="nombre" class="form-control" name="nombre" value="{{$admin->nombre}}">
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Apellido</label>
                        <input type="text" id="apellido" class="form-control" name="apellido" value="{{$admin->apellido}}">

                    </div>
                    <div class="form-group col-lg-12">
                        <label>Direccion</label>
                        <input type="text" id="direccion" class="form-control"  name="direccion" value="{{$admin->direccion}}" >
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Fecha de Ingreso </label>
                        <input  id="fecha_nacimiento" class="form-control" name="fecha_nacimiento" value="{{$admin->fecha_nacimiento}}">
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Correo Electronico</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{$admin->email}}" disabled>
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Contrasena</label>
                        <input id="password" type="password" class="form-control" name="password" value="{{$admin->password}}">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Repita Contrasena</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="{{$admin->password}}" >
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success loginbtn">Actualizar</button>
                    <a  class="btn btn-success loginbtn"href="{{route('admin.index')}}" style="height: 38px;">Atras</a>               
                </div>
            </form>
        </div>
    </div>
</div>
@endsection