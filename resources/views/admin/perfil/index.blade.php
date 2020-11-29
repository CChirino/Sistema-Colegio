@extends('layouts.admin')

@section('titulo', 'Perfil')

@section('content')
    <div class="container pt-4 pb-4">
        @include('custom.message')
        <div class="row">
            <div class="col-sm-4">
                <img class="card-img-user pb-1 pt-1" src="{{asset('storage/'.Auth::user()->image)}}">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h6>{{ auth()->user()->nombre }} {{ auth()->user()->apellido }} </h6>
                        <p class="card-text">{{ auth()->user()->email }}</p>
                        <p class="card-text">{{ auth()->user()->direccion }}</p>
                        <p class="card-text">{{ auth()->user()->fecha_nacimiento }}</p>
                        @foreach($roles as $role)
                        <p class="card-text">{{ $role->name }}</p>
                        @endforeach

                    </div>
                  </div>
                  <div class="pt-3">
                  <td><a class="btn btn-warning" href="{{route('perfil.edit', auth()->user()->id)}}"> <i class="far fa-edit"></i> Editar Datos</a></td>
                  </div>
            </div>
            <div class="col-sm-8">
               <form action="">
                <div class="form-group col-lg-12">
                    <label>Cedula de Identidad</label>
                    <input type="number" id="dni"  class="form-control" name="dni" value="{{ auth()->user()->dni }}" disabled>
                </div>
                <div class="form-group col-lg-12">
                    <label>Nombre</label>
                    <input type="text" id="nombre" class="form-control" name="nombre" value="{{ auth()->user()->nombre }}" disabled>
                </div>
                <div class="form-group col-lg-12">
                    <label>Apellido</label>
                    <input type="text" id="apellido" class="form-control" name="apellido" value="{{ auth()->user()->apellido }}" disabled>

                </div>
                <div class="form-group col-lg-12">
                    <label>Direccion</label>
                    <input type="text" id="direccion" class="form-control"  name="direccion" value="{{ auth()->user()->direccion }}" disabled>
                </div>
                <div class="form-group col-lg-12">
                    <label>Fecha de Nacimiento </label>
                    <input  id="fecha_nacimiento" class="form-control" name="fecha_nacimiento" value="{{ auth()->user()->fecha_nacimiento }}" disabled>
                </div>
                <div class="form-group col-lg-12">
                    <label>Correo Electronico</label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ auth()->user()->email }}" disabled>
                </div>
               </form>
            </div>
        </div>
    </div>
        {{-- <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2020. All rights reserved. Template by <a href="https://colorlib.com/wp/templates/">Colorlib</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection
