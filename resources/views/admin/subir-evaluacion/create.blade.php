@extends('layouts.admin')

@section('titulo', 'Subir Evaluacion')

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
                                {{-- <li><a href="#">Calficaciones</a> <span class="bread-slash">/</span>
                                </li> --}}
                                <li><span class="bread-blod">@yield('titulo')</span> <span class="bread-slash">/</span> 
                                </li>
                                <li><a href=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Static Table Start -->
{{-- <div class="container">
    <div class="col-sm -3">
        <label for="">Selecciona un Materia</label>
        <select class="form-control" id="periodo_id" name="periodo_id">
            <option>Selecciona un materia</option>
            
            @foreach ($materias as $mat)
    
            <option value="{{ $mat->id }}"> 
                {{ $mat ->nombre_materia}}                        
            </option>
        
          @endforeach 
    </div>
    </div>
    </div>  --}}
    <div class="content-error">
        @include('custom.message')
        <div class="hpanel">
            <div class="panel-body">
                    <form action="{{ route('subir-evaluacion-estudiante.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <input id="user_id" name="user_id" value="{{Auth::user()->id }}" style="display:none;">
                            <div class="form-group col-lg-6">
                                <label for="">Evaluacion</label>
                                <select class="form-control" name="evaluaciones_id" id="evaluaciones_id" >        
                                    @foreach ($evaluacion as $eval)
        
                                    <option value="{{$eval->id}}"> 
                                        {{ $eval ->nombre_evaluacion}}                        
                                    </option>
                                
                                  @endforeach    
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="form-group col-lg-6">
                                <label>Nombre de Archivo</label>
                                <input type="text" id="nombre_archivo"  class="form-control @error('nombre_archivo') is-invalid @enderror" name="nombre_archivo"  required autocomplete="nombre_archivo" autofocus>
                                @error('nombre_archivo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Comentario</label>
                                <input type="text" id="comentario"  class="form-control @error('comentario') is-invalid @enderror" name="comentario"  required autocomplete="comentario" autofocus>
                                @error('comentario')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Subida de Archivo</label>
                                <input id="archivo_evaluacion" type="file" class="form-control @error('archivo_evaluacion') is-invalid @enderror" name="archivo_evaluacion">
                                <small class="form-text text-muted">Puede Subir un Maximo de 2Mb</small>
                                @error('archivo_evaluacion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-lg-12">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success loginbtn">Registrar</button>
                                    <button class="btn btn-default">Cancelar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>  
            </div>
        </div>
    </div>
</div>
@endsection