@extends('layouts.admin')

@section('titulo', 'Lista de Estudiantes')

@section('content')
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list single-page-breadcome">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="breadcome-heading">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="breadcome-heading">
                                {{-- <form role="search" name="search" method="GET" class="sr-input-func">
                                    <select class="form-control">        
                                        @foreach ($pensum as $pen)

                                            <option value="{{ $pen->pensum_nombre}}"> 
                                                {{ $pen->pensum_nombre}}                        
                                            </option>
                                
                                        @endforeach    
                                    </select>
                                    <button type="submit">
                                        <p>buscar</p>
                                    </button>
                                </form>   --}}
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><span class="bread-blod">@yield('titulo')</span>
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
<!-- Static Table Start -->
<h6>
    @if ($year)
    <div class="alert alert-primary" role="alert">
    Los resultados para la busqueda '{{$year}}' son:
    </div>
    @endif
</h6>
<div class="container">
    @include('custom.message')
    <table class="table table-striped table-bordered "  style="width:100%">
        <thead>
            <tr>
                <th>Materia</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Direccion</th>
                <th>Fecha de Ingreso</th>
                <th>Email</th>
                <th>Año</th>
            </tr>
        </thead>
        <tbody>
            @foreach($lista as $list)
            <tr>
                <td>{{$list->dni}}</td>
                <td>{{$list->nombre}}</td>
                <td>{{$list->apellido}}</td>
                <td>{{$list->direccion}}</td>
                <td>{{$list->fecha_nacimiento}}</td>
                <td>{{$list->email}}</td>
                <td>{{$list->pensum_nombre}}</td>
            @endforeach
            </tr>
        </tbody>
    </table>
    <div>
        {{$lista->links()}} 
    </div>
</div>
@endsection