@extends('layouts.admin')

@section('titulo', 'Opiniones Evaluaciones')

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
                    <form action="{{ route('opinion-evaluaciones.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <input id="user_id" name="user_id" value="{{Auth::user()->id }}" style="display:none;">
                            <div class="form-group col-lg-6">
                                <label for="">Evaluacion</label>
                                <select class="form-control" name="subir_evaluaciones_id" id="subir_evaluaciones_id" >        
                                    @foreach ($listarevaluaciones as $le)
        
                                    <option value="{{$le->id}}"> 
                                        {{ $le ->nombre}} {{ $le ->apellido}} {{ $le ->nombre_materia}} {{ $le ->nombre_evaluacion}}                        
                                    </option>
                                
                                  @endforeach    
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="form-group col-lg-6">
                                <label>Opinion </label>
                                <textarea id="opinion"  class="form-control @error('opinion') is-invalid @enderror" name="opinion"  required autocomplete="opinion" autofocus  rows="3"></textarea>
                                @error('opinion')
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