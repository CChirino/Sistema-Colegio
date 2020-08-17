@extends('layouts.admin')

@section('titulo', 'Crear Inscripcion')

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
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <form action="{{ route('inscripciones-estudiante.store') }}" method="POST">
                @csrf
                <div class=" form-group col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 pt-2 pb-2">
                            <div class="card" style="width: 18rem;">
                                {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                                <div class="card-body">
                                <h5 class="card-title">{{Auth::user()->nombre}} {{Auth::user()->apellido}}</h5>
                                  <input type="text" id="role_user_id" name="role_user_id" value="{{ $estudiantes->id }}" style="display: none;">
                                  <p class="card-text">
                                      {{Auth::user()->dni}}
                                  </p>
                                  <p class="card-text">
                                    {{Auth::user()->direccion}}
                                  </p>
                                  <p class="card-text">
                                    {{Auth::user()->fecha_nacimiento}}
                                  </p>
                                </div>
                              </div>
                        </div>
                        <div class="col-lg-6 pt-2 pb-2">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <div class="pt-2 pb-2">
                                        <select class="form-control" id="pensum_id" name="pensum_id">
                                            <option>Selecciona un año</option>
                    
                                                @foreach ($pensum as $pen)
                    
                                            <option value="{{ $pen->id }}"> 
                                                {{ $pen ->pensum_nombre}}                        
                                            </option>
                                        
                                          @endforeach    
                                        </select>
                                    </div>
                                    <div class="pt-2 pb-2">
                                        <select class="form-control" id="periodo_id" name="periodo_id">
                                            <option>Selecciona un periodo</option>
                                            
                                            @foreach ($periodo as $per)
                
                                            <option value="{{ $per->id }}"> 
                                                {{ $per ->nombre_periodo}}                        
                                            </option>
                                        
                                          @endforeach    
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <table id="example" class="table table-striped table-bordered " style="width:100%">
                        <thead>
                            <tr>
                                <th> Seleccionar</th>
                                <th> Nombre Materia</th>
                                <th> Año</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($año_materias as $año)
                            <tr>
                                    <td><input type="checkbox" 
                                        class="form-group form-check" 
                                        id="inscripcion_{{$año->id}}"
                                        value="{{$año->id}}"
                                        name="materias[]"></td>
                                    <td>
                                    {{ $año->nombre_materia }} 
                                    </td>
                                    <td>{{$año->pensum_nombre}}</td>
                            </tr>
                                @endforeach
                        </tbody>
                    </table>

                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success loginbtn">Inscribirse</button>
                </div> 
            </form>
        </div>
    </div>
</div>
@endsection