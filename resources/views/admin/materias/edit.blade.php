@extends('layouts.admin')

@section('titulo', 'Editar Materia')

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
                                <li><a href="#">Materia</a> <span class="bread-slash">/</span>
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
        <form action="{{route('materias.update',$materias->id)}}" method="POST" enctype="multipart/form-data" >
                @csrf
                @method('put')
                <div class="row">
                    <div class="form-group col-lg-12">
                        <label>Nombre de Materia </label>
                        <input type="text" id="nombre_materia"  class="form-control" name="nombre_materia"  value="{{ $materias->nombre_materia }}" >
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Descripcion de Materia </label>
                        <input type="text" id="descripcion_materia" class="form-control" name="descripcion_materia" value="{{ $materias->descripcion_materia}}" >
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="">Selecciona un año</label>
                        <select class="form-control" id="pensum_id" name="pensum_id">
                            {{-- <option>Selecciona un año</option> --}}
                            
                            @foreach ($pensum as $pen)

                            <option value="{{ $pen->id }}"> 
                                {{ $pen ->pensum_nombre}}                        
                            </option>
                        
                          @endforeach    
                        </select>
                    </div>
                    <div class="form-group col-lg-6" ></div>
                    <div class="form-group col-lg-6">
                        <label for="">Selecciona un periodo</label>
                        <select class="form-control" id="periodo_id" name="periodo_id">
                            {{-- <option>Selecciona un periodo</option> --}}
                            
                            @foreach ($periodo as $per)

                            <option value="{{ $per->id }}"> 
                                {{ $per ->nombre_periodo}}                        
                            </option>
                        
                          @endforeach    
                        </select>
                    </div>
                    <div class="form-group col-lg-6" ></div>
                <div class="text-center pt-3 pb-3">
                    <button type="submit" class="btn btn-success loginbtn">Actualizar</button>
                    <button class="btn btn-default">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection