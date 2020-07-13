@extends('layouts.admin')

@section('titulo', 'Ver Materia')

@section('content')
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list single-page-breadcome">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <form role="search" class="sr-input-func">
                                    <input type="text" placeholder="Search..." class="search-int form-control">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="#">Materias</a> <span class="bread-slash">/</span>
                                </li>
                                <li><a href="#">@yield('titulo')</a> <span class="bread-slash">/</span>
                                </li>
                            <li><span class="bread-blod">{{$materias->nombre_materia}}</span>
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
            <form >
                @csrf
                @method('put')
                <div class="row">
                    <div class="form-group col-lg-12">
                        <label>Nombre de Materia </label>
                        <input type="text" id="nombre_materia"  class="form-control" name="nombre_materia"  value="{{ $materias->nombre_materia }}" disabled >
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Descripcion de Materia </label>
                        <input type="text" id="descripcion_materia" class="form-control" name="descripcion_materia" value="{{ $materias->descripcion_materia}}" disabled >
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Año</label>                        
                        <select class="form-control" id="pensum_id" name="pensum_id" disabled>    
                            @foreach ($pensum as $pen)

                            <option value="{{ $pen->id }}"> 
                                {{ $pen ->pensum_nombre}}                        
                            </option>
                        
                          @endforeach    
                        </select>
                    </div>
                    <div class="col-lg-6"></div>
                    <div class="form-group col-lg-6">
                        <label>Periodo</label>                                               
                        <select class="form-control" id="periodo_id" name="periodo_id" disabled>     
                            @foreach ($periodo as $per)

                            <option value="{{ $per->id }}"> 
                                {{ $per ->nombre_periodo}}                        
                            </option>
                        
                          @endforeach    
                        </select>
                    </div>
                    <div class="col-lg-6"></div>
                    <div class="form-group col-lg-6">
                        <label for="">Selecciona un Profesor</label>
                        <select class="form-control" id="role_user_id" name="role_user_id" disabled>
                            
                            @foreach ($profesores as $prof)

                            <option value="{{ $prof->id }}"> 
                                {{ $prof->nombre}}                        
                            </option>
                        
                          @endforeach    
                        </select>
                    </div>
                </div>
                <div class="text-center">
                    <a href="{{ route('materias.index')}}" class="btn btn-success loginbtn"> Regresar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection