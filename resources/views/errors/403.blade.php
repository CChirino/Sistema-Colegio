@extends('errors.error-layout')

@section('content')

<div class="error-pagewrap">
    <div class="error-page-int">
        <div class="content-error">
            <h1>ERROR <span class="counter"> 403</span></h1>
            <p>Lo sentimos, pero no te encuentras autorizado en esta sección, por favor vuele al inicio</p>
        <a href="{{route('home')}}">Inicio</a>
</div>

@endsection