@extends('layouts.admin')

@section('titulo', 'Crear Inscripcion')

@section('content')
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list single-page-breadcome">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            {{-- <div class="breadcome-heading">
                                <form role="search" class="sr-input-func">
                                    <input type="text" placeholder="Search..." class="search-int form-control">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </form>
                            </div> --}}
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="#">Materias</a> <span class="bread-slash">/</span>
                                </li>
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
<div class="content-error">
    <div class="hpanel">
        <div class="panel-body">
            <form method="POST" action="{{ route('inscripciones.store') }}" id="loginForm" enctype="multipart/form-data" >
                @csrf
                <div class="row">
                    {{-- <div class="form-group col-lg-12">
                        <label>Nombre de Materia </label>
                        <input type="text" id="nombre_materia"  class="form-control @error('nombre_materia') is-invalid @enderror" name="nombre_materia"  value="{{ old('nombre_materia') }}" required autocomplete="nombre_materia" autofocus>
                        @error('nombre_materia')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div> --}}
                    {{-- <div class="form-group col-lg-12">
                        <label>Descripcion de Materia </label>
                        <input type="text" id="descripcion_materia" class="form-control @error('descripcion_materia') is-invalid @enderror" name="descripcion_materia" value="{{ old('descripcion_materia') }}" required autocomplete="descripcion_materia" autofocus>
                        @error('descripcion_materia')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div> --}}
                    <div class="form-group col-lg-6">
                        <label for="">Selecciona un año</label>
                        <select class="form-control" id="pensum_id" name="pensum_id">
                            <option>Selecciona un año</option>

                            @foreach ($pensum as $pen)

                            <option value="{{ $pen->id }}"> 
                                {{ $pen ->pensum_nombre}}                        
                            </option>
                        
                          @endforeach    
                        </select>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="">Selecciona un periodo</label>
                        <select class="form-control" id="periodo_id" name="periodo_id">
                            <option>Selecciona un periodo</option>
                            
                            @foreach ($periodo as $per)

                            <option value="{{ $per->id }}"> 
                                {{ $per ->nombre_periodo}}                        
                            </option>
                        
                          @endforeach    
                        </select>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="">Selecciona un Estudiante</label>
                        <select class="form-control" id="role_user_id" name="role_user_id" >
                            <option>Selecciona un Estudiante</option>
                            
                            @foreach ($estudiantes as $est)

                            <option value="{{ $est->id }}"> 
                                {{ $est->nombre}}                        
                            </option>
                        
                          @endforeach    
                        </select>
                    </div>
                </div>
                <div class="form-group col-lg-12">

                    @foreach ($materia as $mat)
                        
                    <div class="form-group form-check">
                        <input type="checkbox" 
                        class="custom-control-input" 
                        id="inscripcion_{{$mat->id}}"
                        value="{{$mat->id}}"
                        name="materias[]">
                        <label class="custom-control-label" 
                            for="inscripcion_{{$mat->id}}"> 
                            {{ $mat->nombre_materia }} 
                        </label>
                      </div>
                    @endforeach

                <div class="text-center">
                    <button type="submit" class="btn btn-success loginbtn">Registrar</button>
                    <button class="btn btn-default">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection