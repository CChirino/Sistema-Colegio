@extends('layouts.padre-registro')

@section('titulo', 'Registro')

@section('content')
<div class="error-pagewrap">
    <div class="error-page-int">
        <div class="text-center custom-login">
            <h3>Registro</h3>
        </div>
        <div class="content-error">
            <div class="hpanel">
                <div class="panel-body">
                    <form method="POST" action="{{ route('register') }}" id="loginForm">
                        @csrf
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label>DNI</label>
                                <input type="number" id="dni"  class="form-control @error('dni') is-invalid @enderror" name="dni" placeholder="00.000.000" value="{{ old('dni') }}" required autocomplete="dni" autofocus>
                                @error('dni')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Nombre</label>
                                <input type="text" id="nombre" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>
                                @error('nombre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Apellido</label>
                                <input type="text" id="apellido" class="form-control @error('apellido') is-invalid @enderror" name="apellido" value="{{ old('apellido') }}" required autocomplete="apellido" autofocus">
                                @error('apellido')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Direccion</label>
                                <input type="text" id="direccion" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="{{ old('direccion') }}" required autocomplete="direccion" autofocus>
                                @error('direccion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Fecha de Nacimiento </label>
                                <input type="date" id="fecha_nacimiento" class="form-control @error('fecha_nacimiento') is-invalid @enderror" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" required autocomplete="fecha_nacimiento" autofocus>
                                @error('fecha_nacimiento')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Contrasena</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Repita Contrasena</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Correo Electronico</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Repetir Correo Electronico</label>
                                <input id="email_verified_at" type="email" class="form-control @error('email_verified_at') is-invalid @enderror" name="email_verified_at" value="{{ old('email_verified_at') }}" required autocomplete="email">
                                @error('email_verified_at')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success loginbtn">Registrar</button>
                            <button class="btn btn-default">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="text-center login-footer">
            <p>Copyright © 2018. All rights reserved. Template by <a href="https://colorlib.com/wp/templates/">Colorlib</a></p>
        </div>
    </div>   
</div>
@endsection
