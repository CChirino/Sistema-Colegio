@extends('layouts.admin')

@section('titulo', 'Subir Video')

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
                    <form action="{{ route('clases-en-linea.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <div class="form-group col-lg-6">
                                <label for="">Materia</label>
                                <select class="form-control" name="materia_id" id="materia_id" >        
                                    @foreach ($materias as $mat)
        
                                    <option value="{{$mat->id}}"> 
                                        {{ $mat ->nombre_materia}}                        
                                    </option>
                                
                                  @endforeach    
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label>Nombre del video</label>
                                <input type="text" id="nombre_clase"  class="form-control @error('nombre_clase') is-invalid @enderror" name="nombre_clase"  required autocomplete="nombre_clase" autofocus>
                                @error('nombre_clase')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Link del video</label>
                                <input type="text" id="link_clase"  class="form-control @error('link_clase') is-invalid @enderror" name="link_clase"  required autocomplete="link_clase" autofocus>
                                @error('link_clase')
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