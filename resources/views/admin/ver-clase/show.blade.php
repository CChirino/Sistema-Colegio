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
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 pt-2 pb-2">
                                    <h1 class="text-center">{{$verclases->nombre_clase}}</h1>
                                </div>
                                <div class="col-sm-12 pt-2 pb-4 embed-responsive embed-responsive-16by9" >
                                    <iframe class="embed-responsive-item" src="{{$verclases ->link_clase}}" width="1000" height="500" frameborder="0"></iframe> 
                                </div>
                                <div class="col-lg-12 pt-2 ">
                                    <div class="text-center">
                                        {{-- <button type="submit" class="btn btn-success loginbtn">Registrar</button> --}}
                                        <button class="btn btn-success loginbtn"><a href="{{ route('clases-en-linea.index') }}"> Atras</a></button>
                                    </div>
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