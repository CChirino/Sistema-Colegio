@extends('errors.error-layout')

@section('content')

<div class="error-pagewrap">
    <div class="error-page-int">
        <div class="content-error">
            <h1>ERROR <span class="counter"> 503</span></h1>
            <p>Lo sentimos,pero existe un error con el servicio no se encuentra disponible, por favor vuelve contacte al administrador.</p>
        <a href="{{route('home')}}">Inicio</a>
</div>

@endsection