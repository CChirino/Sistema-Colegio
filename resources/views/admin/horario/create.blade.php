@extends('layouts.admin')

@section('titulo', 'Crear Horario')

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
    @include('custom.message')
    <div class="hpanel">
        <div class="panel-body">
            <form method="POST" action="{{ route('horarios.store') }}" id="loginForm" enctype="multipart/form-data" >
                @csrf
                <div class="row">
                    <div class="form-group col-lg-6">
                        <label for="">Selecciona una Dia </label>
                        <select class="form-control" id="dia" name="dia">
                            <option>Lunes</option>  
                            <option>Martes</option>  
                            <option>Miercoles</option>  
                            <option>Jueves</option>  
                            <option>Viernes</option>  
                        </select>
                        @error('dia')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="">Seleccione un Horario </label>
                        <select class="form-control" id="horario" name="horario">
                            <option>6:50 AM A 7:30 AM</option>  
                            <option>07:30 AM A 08:15 AM</option>  
                            <option>08:30 AM A 09:10 AM</option>  
                            <option>09:10 AM A 09:55 AM</option>  
                            <option>10:05 AM A 10:50 AM</option>  
                            <option>10:50 AM A 11:30 AM</option>  
                            <option>11:30 AM A 12:10 AM</option>  
                            <option>12:10 AM A 12:50 AM</option>  
                            <option>Preescolar - No presionar</option>  
                            <option>08:00 AM A 08:30 AM</option>  
                            <option>08:30 AM A 09:00 AM</option>  
                            <option>09:00 AM A 09:45 AM</option>  
                            <option>09:45 AM A 10:00 AM</option>  
                            <option>10:00 AM A 10:45 AM</option>  
                            <option>10:45 AM A 11:00 AM</option>  
                            <option>11:15 AM A 11:45 AM</option>  
                            <option>Primaria - No presionar</option>  
                            <option>08:00 AM A 08:45 AM</option>  
                            <option>08:45 AM A 09:00 AM</option>  
                            <option>09:00 AM A 10:00 AM</option>  
                            <option>10:00 AM A 10:30 AM</option>  
                            <option>10:30 AM A 11:30 AM</option>  
                        </select>
                        @error('horario')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="">Seleccione un Aula </label>
                        <select class="form-control" id="aula" name="aula">
                            <option>1</option>  
                            <option>2</option>  
                            <option>3</option>  
                            <option>4</option>  
                        </select>
                        @error('aula')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="">Seleccione una Seccion </label>
                        <select class="form-control" id="seccion" name="seccion">
                            <option>A</option>  
                            <option>B</option>  
                            <option>C</option>  
                            <option>D</option>  
                        </select>
                        @error('seccion')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Cupos</label>
                        <input type="number" id="cupos" class="form-control @error('cupos') is-invalid @enderror" name="cupos" value="{{ old('cupos') }}" required autocomplete="cupos" autofocus>
                        @error('cupos')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="">Selecciona una Materia</label>
                        <select class="form-control" id="horario_id" name="horario_id">
                            <option>Selecciona una Materia</option>

                            @foreach ($materias as $mat)

                            <option value="{{ $mat->id }}"> 
                                {{ $mat ->nombre_materia}}  - {{$mat->pensum_nombre}}                      
                            </option>
                        
                          @endforeach    
                        </select>
                    </div>
                    {{-- <div class="col-lg-6"></div> --}}
                <div class="text-center pt-4 pl-4">
                    <button type="submit" class="btn btn-success loginbtn">Registrar</button>
                    <a  class="btn btn-success loginbtn"href="{{route('horarios.index')}}" style="height: 38px;">Atras</a>               
                </div>
            </form>
        </div>
    </div>
</div>
@endsection