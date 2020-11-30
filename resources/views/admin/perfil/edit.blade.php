@extends('layouts.admin')

@section('titulo', 'Perfil')

@section('content')
<div class="content-error">
    @include('custom.message')
    <div class="hpanel">
        <div class="panel-body">
        <form action="{{route('perfil.update',$user->id)}}" method="POST" enctype="multipart/form-data" >
                @csrf
                @method('put')
                <div class="row">
                    <div class="form-group col-lg-6">
                        <label>Foto de Perfil</label> <br>
                    <img src="{{ asset('storage/'.$user->image) }}" alt="" width="300px" class="mb-2" >
                    <input id="image" type="file" class="form-control" name="image" value="{{$user->image}}"> <br>
    
                    </div>
                    <div class="form-group col-lg-12">
                        <label>DNI</label>
                        <input type="number" id="dni"  class="form-control" name="dni" value="{{$user->dni}}" disabled >
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Nombre</label>
                        <input type="text" id="nombre" class="form-control" name="nombre" value="{{$user->nombre}}">
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Apellido</label>
                        <input type="text" id="apellido" class="form-control" name="apellido" value="{{$user->apellido}}">

                    </div>
                    <div class="form-group col-lg-12">
                        <label>Direccion</label>
                        <input type="text" id="direccion" class="form-control"  name="direccion" value="{{$user->direccion}}" >
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Fecha de Nacimiento </label>
                        <input  id="fecha_nacimiento" class="form-control" name="fecha_nacimiento" value="{{$user->fecha_nacimiento}}">
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Correo Electronico</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{$user->email}}" disabled>
                    </div>
                    {{-- <div class="form-group col-lg-6">
                        <label>Contrasena</label>
                        <input id="password" type="password" class="form-control" name="password" value="{{$user->password}}">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Repita Contrasena</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="{{$user->password}}" >
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div> --}}
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success loginbtn">Actualizar</button>
                    <button class="btn btn-default">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
