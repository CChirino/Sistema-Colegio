@extends('errors.error-layout')

@section('content')

<div class="error-pagewrap">
    <div class="error-page-int">
        <div class="content-error">
            <h1>ERROR <span class="counter"> 404</span></h1>
            <p>Lo sentimos, pero la página que estás buscando ha sido encontrada. Intente verificar la URL del error, luego presione el botón Actualizar en su navegador o intente encontrar algo más en nuestra aplicación.</p>
        <a href="{{route('home')}}">Inicio</a>
</div>

@endsection
