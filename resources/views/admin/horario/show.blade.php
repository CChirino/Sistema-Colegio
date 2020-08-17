@extends('layouts.admin')

@section('titulo', 'Ver Profesor')

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
                                <li><a href="#">Horarios</a> <span class="bread-slash">/</span>
                                </li>
                                <li><a href="#">@yield('titulo')</a> <span class="bread-slash">/</span>
                                </li>
                            <li><span class="bread-blod">{{$horarios->nombre}}</span>
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
                        <label for=""> Dia </label>
                        <select class="form-control" id="dia" name="dia" disabled >
                            <option>{{$horarios->dia}}</option> 
                        </select>
                    </div>
                    <div class="form-group col-lg-12">
                        <label for="">Horario </label>
                        <select class="form-control" id="horario" name="horario" disabled>
                            <option>{{$horarios->horario}}</option>  
                        </select>
                    </div>
                    <div class="form-group col-lg-12">
                        <label for="">Aula </label>
                        <select class="form-control" id="aula" name="aula" disabled>
                            <option>{{$horarios->aula}}</option>  
                        </select>
                    </div>
                    <div class="form-group col-lg-12">
                        <label for="">Seccion </label>
                        <select class="form-control" id="seccion" name="seccion" disabled>
                            <option>{{$horarios->seccion}}</option>  
                        </select>
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Cupos</label>
                        <input type="number" id="cupos" class="form-control"  name="cupos" value="{{$horarios->cupos}}" disabled>
                    </div>
                    <div class="form-group col-lg-12">
                        <label for="">Materia </label>
                        <select class="form-control" id="horario_id" name="horario_id" disabled >
                            <option>Selecciona una Materia</option>
                            @foreach ($materias as $mat)

                            <option value="{{ $mat->id }}"> 
                                {{ $mat ->nombre_materia}}                        
                            </option>
                        
                          @endforeach  
                        </select>
                    </div>
                </div>
                <div class="text-center">
                    <a href="{{ route('horarios.index')}}" class="btn btn-success loginbtn"> Regresar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection