@extends('layouts.admin')

@section('titulo', 'Ver evaluacion ')

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
    <div class="content-error">
        <div class="hpanel">
            <div class="panel-body">
                    <form >
                        @csrf
                        {{-- <div>
                            <div class="form-group col-lg-6">
                                <label for="">Evaluacion</label>
                                <select class="form-control" name="evaluaciones_id" id="evaluaciones_id" disabled >        
                                    @foreach ($evaluacion as $eval)
        
                                    <option> 
                                        {{ $eval ->nombre_evaluacion}}                        
                                    </option>
                                
                                  @endforeach    
                                </select>
                            </div>
                        </div> --}}
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label>Archivo de evaluacion</label> <br>
                                <iframe src="{{ asset('storage/'.$subirevaluaciones->archivo_evaluacion) }}" width="500" height="500" frameborder="0"></iframe> 
                                <div>
                                    <a href="{{ asset('storage/'.$subirevaluaciones->archivo_evaluacion) }}">Abrir PDF</a>
                                </div>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Nombre de Archivo</label>
                            <input type="text" id="nombre_archivo"  class="form-control" name="nombre_archivo" value="{{$subirevaluaciones->nombre_archivo}}" disabled>
                                @error('nombre_archivo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Comentario</label>
                                <input type="text" id="comentario"  class="form-control" name="comentario"  value="{{$subirevaluaciones->comentario}}" disabled>
                                @error('comentario')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> 
                                @enderror
                            </div>
                            <div class="col-lg-12">
                                <div class="text-center">
                                    {{-- <button type="submit" class="btn btn-success loginbtn">Registrar</button> --}}
                                    {{-- <button class="btn btn-success loginbtn"><a href="{{ route('subir-evaluacion-estudiante.index') }}"> Atras</a></button> --}}
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