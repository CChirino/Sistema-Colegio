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
                                <li><a href=""> Por materia </a></li>
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
    <div class="row">
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
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <form method="POST">
                @csrf
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col-sm-1"> Materias</th>
                            <th scope="col-sm-1"> IL-I </th>
                            <th scope="col-sm-1"> IL-G </th>
                            <th scope="col-sm-1"> IL-F </th>
                            <th scope="col-sm-1"> IIL-I </th>
                            <th scope="col-sm-1"> IIL-G </th>
                            <th scope="col-sm-1"> IIL-F </th>
                            <th scope="col-sm-1"> IIIL-I </th>
                            <th scope="col-sm-1"> IIIL-G </th>
                            <th scope="col-sm-1"> IIIL-F </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($materias as $materias)
                        <td  scope="row" value="{{ $materias->id }}" id="estudiante_id" name="estudiante_id" >
                            <input style="display:none;" value="{{ $materias->id }}" id="estudiante_id" name="estudiante_id"  >
                            {{ $materias->nombre_materia}}                        
                        </td>
                        <td scope="row"><input type="number" id="IL_I"                  name="IL_I" size="1" value="{{$materias->IL_I}}"></td>
                        <td scope="row"><input type="number" id="IL_G"                  name="IL_G" size="1" value="{{$materias->IL_G}}" ></td>
                        <td scope="row"><input type="number" id="IL_F"                  name="IL_F" size="1" value="{{$materias->IL_F}}" ></td>
                        <td scope="row"><input type="number" id="IIL_I"                 name="IIL_I" size="1" value="{{$materias->IIL_I}}" ></td>
                        <td scope="row"><input type="number" id="IIL_G"                 name="IIL_G" size="1" value="{{$materias->IIL_G}}" ></td>
                        <td scope="row"><input type="number" id="IIL_F"                 name="IIL_F" size="1" value="{{$materias->IIL_F}}" ></td>
                        <td scope="row"><input type="number" id="IIIL_I"                name="IIIL_I" size="1" value="{{$materias->IIIL_I}}" ></td>
                        <td scope="row"><input type="number" id="IIIL_G"                name="IIIL_G" size="1" value="{{$materias->IIIL_G}}" ></td>
                        <td scope="row"><input type="number" id="IIIL_F"                name="IIIL_F" size="1" value="{{$materias->IIIL_F}}" ></td>
                        <tr>
                            @endforeach      
                        </tr>
                    </tbody>
                </table>
                {{-- <div class="text-center">
                    <button type="submit" class="btn btn-success loginbtn">Guardar</button>
                    <button class="btn btn-default">Cancelar</button>
                </div>  --}}
            </form>
        </div>
    </div>
</div>
@endsection