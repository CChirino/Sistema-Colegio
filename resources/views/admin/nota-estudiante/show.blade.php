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
                <table id="example" class="table table-striped table-bordered table-responsive" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col-sm-1"> Materias</th>
                            <th scope="col-sm-1"> E1-1 </th>
                            <th scope="col-sm-1"> E2-1 </th>
                            <th scope="col-sm-1"> E3-1 </th>
                            <th scope="col-sm-1"> E4-1 </th>
                            <th scope="col-sm-1"> EF-1 </th>
                            <th scope="col-sm-1"> E1-2 </th>
                            <th scope="col-sm-1"> E2-2 </th>
                            <th scope="col-sm-1"> E3-2 </th>
                            <th scope="col-sm-1"> E4-2 </th>
                            <th scope="col-sm-1"> EF-2 </th>
                            <th scope="col-sm-1"> E1-3 </th>
                            <th scope="col-sm-1"> E2-3 </th>
                            <th scope="col-sm-1"> E3-3 </th>
                            <th scope="col-sm-1"> E4-3 </th>
                            <th scope="col-sm-1"> EF-3 </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($materias as $materias)
                        <td  scope="row" value="{{ $materias->id }}" id="estudiante_id" name="estudiante_id" >
                            <input style="display:none;" value="{{ $materias->id }}" id="estudiante_id" name="estudiante_id"  >
                            {{ $materias->nombre_materia}}                        
                        </td>
                        <td><input type="number" id="E1_1"                  name="E1_1" size="1" value="{{$materias->E1_1}}" ></td>
                        <td><input type="number" id="E2_1"                  name="E2_1" size="1" value="{{$materias->E2_1}}" ></td>
                        <td><input type="number" id="E3_1"                  name="E3_1" size="1" value="{{$materias->E3_1}}" ></td>
                        <td><input type="number" id="E4_1"                 name="E4_1" size="1" value="{{$materias->E4_1}}" ></td>
                        <td><input type="number" id="EF_1"                 name="EF_1" size="1" value="{{$materias->EF_1}}" ></td>
                        <td><input type="number" id="E1_2"                  name="E1_2" size="1" value="{{$materias->E1_2}}" ></td>
                        <td><input type="number" id="E2_2"                  name="E2_2" size="1" value="{{$materias->E2_2}}" ></td>
                        <td><input type="number" id="E3_2"                  name="E3_2" size="1" value="{{$materias->E3_2}}" ></td>
                        <td><input type="number" id="E4_2"                 name="E4_2" size="1" value="{{$materias->E4_2}}" ></td>
                        <td><input type="number" id="EF_2"                 name="EF_2" size="1" value="{{$materias->EF_2}}" ></td>
                        <td><input type="number" id="E1_3"                  name="E1_3" size="1" value="{{$materias->E1_3}}" ></td>
                        <td><input type="number" id="E2_3"                  name="E2_3" size="1" value="{{$materias->E2_3}}" ></td>
                        <td><input type="number" id="E3_3"                  name="E3_3" size="1" value="{{$materias->E3_3}}" ></td>
                        <td><input type="number" id="E4_3"                 name="E4_3" size="1" value="{{$materias->E4_3}}" ></td>
                        <td><input type="number" id="EF_3"                 name="EF_3" size="1" value="{{$materias->EF_3}}" ></td>
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