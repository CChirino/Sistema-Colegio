@extends('layouts.admin')

@section('titulo', 'Editar Evaluacion')

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
        <div class="hpanel">
            <div class="panel-body">
                    <form action="{{route('listar-evaluaciones.update',$evaluaciones->id)}}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div>
                            <div class="form-group col-lg-6">
                                <label for="">Materia</label>
                                <select class="form-control" name="profesores_id" id="profesores_id" >        
                                    @foreach ($materias as $mat)
        
                                    <option value="{{Auth::user()->id}}"> 
                                        {{ $mat ->nombre_materia}}                        
                                    </option>
                                
                                  @endforeach    
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label>Nombre de Evaluación</label>
                                <input type="text" id="nombre_evaluacion" name="nombre_evaluacion"  class="form-control" name="nombre_evaluacion" value="{{$evaluaciones->nombre_evaluacion}}">
                                @error('nombre_evaluacion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Fecha de Incio de la Evaluación</label>
                                <input type="date" id="fecha_inicio" name="fecha_inicio"  class="form-control" name="fecha_inicio" value="{{$evaluaciones->fecha_inicio}}">
                                @error('fecha_inicio')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Fecha de Fin de la Evaluación</label>
                                <input type="date" id="fecha_fin" name="fecha_fin" class="form-control" value="{{$evaluaciones->fecha_inicio}}">
                                @error('fecha_fin')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                            <div class="form-group col-lg-6">
                                <label>Subida de Archivo</label>
                                <input id="archivo_evaluacion" type="file" class="form-control" name="archivo_evaluacion">
                                <div>
                                    <a href="{{ asset('storage/'.$evaluaciones->archivo_evaluacion) }}">Abrir PDF</a>
                                </div>
                                @error('archivo_evaluacion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-lg-12">
                                <table class="table table-striped table-bordered " style="width:100%">
                                    <thead>
                                        <tr>
                                            <div class="content-error">
                                                <th> <input type="checkbox" name="marcarTodo" id="marcarTodo"> Seleccionar Todos</th>
                                            <th>Estudiantes</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($estudiante as $est)
                                        <td><input type="checkbox" class="case" value="{{ $est->id }}" id="estudiante_id" name="estudiante_id"></td>
                                        <td>
                                            {{ $est->nombre}}                        
                                        </td>
                                        <tr>
                                            @endforeach      
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-lg-12">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success loginbtn">Actualizar</button>
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