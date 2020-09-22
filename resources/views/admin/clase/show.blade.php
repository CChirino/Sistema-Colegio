@extends('layouts.admin')

@section('titulo', 'Ver Video ')

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
                                <label for="">Materia</label>
                                <select class="form-control" name="evaluaciones_id" id="evaluaciones_id" disabled >        
                                    @foreach ($materias as $mat)
        
                                    <option> 
                                        {{ $mat ->nombre_materia}}                        
                                    </option>
                                
                                  @endforeach    
                                </select>
                            </div>
                        </div> --}}
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label>Archivo de evaluacion</label> <br>
                                <x-embed url="{{$clase ->link_clase}}" />
                                {{-- <iframe src="{{$clase ->link_clase}}" width="500" height="500" frameborder="0"></iframe>  --}}
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Nombre de video </label>
                            <input type="text" id="nombre_clase"  class="form-control" name="nombre_clase" value="{{$clase->nombre_clase}}" disabled>
                                @error('nombre_clase')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-lg-12">
                                <div class="text-center">
                                    {{-- <button type="submit" class="btn btn-success loginbtn">Registrar</button> --}}
                                    <button class="btn btn-success loginbtn"><a href="{{ route('clases-en-linea.index') }}"> Atras</a></button>
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