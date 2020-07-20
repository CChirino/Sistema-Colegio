@extends('layouts.admin')

@section('titulo', 'Calificaciones')

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
                                <li><a href="#">Profesores</a> <span class="bread-slash">/</span>
                                </li>
                                <li><a href="#">@yield('titulo')</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod"></span>
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
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
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
                <div class="col-sm-4"></div>
                <div class="col-sm-4"></div>
                <div class="col-sm-4"></div>
            </div>
        </div>
        <form action="{{route('notas.update',$materias->id)}}" method="POST" enctype="multipart/form-data" >
                @csrf
                @method('put')
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Estudiantes</th>
                            <th>IL-I</th>
                            <th>IL-G</th>
                            <th>IL-F</th>
                            <th>IIL-I</th>
                            <th>IIL-G</th>
                            <th>IIL-F</th>
                            <th>IIIL-I</th>
                            <th>IIIL-G</th>
                            <th>IIIL-F</th>                      
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($estudiante as $est)
                        <td  value="{{ $est->id }}">
                            {{ $est->nombre}}                        
                        </td>
                        <td><input type="number" id="IL-I"                  name="IL-I" size="1"></td>
                        <td><input type="number" id="IL-G"                  name="IL-G" size="1"></td>
                        <td><input type="number" id="IL-F"                  name="IL-F" size="1"></td>
                        <td><input type="number" id="IIL-I"                 name="IIL-I" size="1"></td>
                        <td><input type="number" id="IIL-G"                 name="IIL-G" size="1"></td>
                        <td><input type="number" id="IIL-F"                 name="IIL-F" size="1"></td>
                        <td><input type="number" id="IIIL-I"                name="IIIL-I" size="1"></td>
                        <td><input type="number" id="IIIL-G"                name="IIIL-G" size="1"></td>
                        <td><input type="number" id="IIIL-F"                name="IIIL-F" size="1"></td>
                            <tr>
                            @endforeach      
                            </tr>
                    </tbody>
                </table>
            </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-success loginbtn">Actualizar</button>
                    <button class="btn btn-default">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection