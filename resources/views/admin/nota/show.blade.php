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
            <form>
                @csrf
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Estudiante</label>
                        <select class="form-control" name="estudiante_id" id="estudiante_id" >        
                            <option value="{{ $notas->estudiante_id }}"> 
                            @foreach ($estudiante as $est)
                                {{ $est->nombre}} {{ $est->apellido}}                                    
                            </option>
                          @endforeach    
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Materia</label>
                        <select class="form-control" name="materias_id" id="materias_id" >        
                            <option value="{{ $notas->materias_id }}"> 
                            @foreach ($materias as $mat)
                                {{ $mat ->nombre_materia}}                        
                            </option>
                        
                          @endforeach    
                        </select>
                    </div>
                </div>
                <table id="example" class="table table-striped table-bordered table-responsive"  style="width:100%">
                    <thead>
                        <tr>
                            <th> E1-1 </th>
                            <th> E2-1 </th>
                            <th> E3-1 </th>
                            <th> E4-1 </th>
                            <th> EF-1 </th>
                            <th> E1-2 </th>
                            <th> E2-2 </th>
                            <th> E3-2 </th>
                            <th> E4-2 </th>
                            <th> EF-2 </th>
                            <th> E1-3 </th>
                            <th> E2-3 </th>
                            <th> E3-3 </th>
                            <th> E4-3 </th>
                            <th> EF-3 </th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- <div class="pb-4">
                            <div class="form-group col-lg-6">
                                <label for="">Materia</label>
                                <select class="form-control" name="notas_id" id="notas_id" >        
                                    @foreach ($materias as $mat)
        
                                    <option value="{{ $mat->role_user_id }}"> 
                                        {{ $mat ->nombre_materia}}                        
                                    </option>
                                
                                  @endforeach    
                                </select>
                            </div>
                        </div> --}}
                        {{-- @foreach ($estudiante as $est) --}}
                        {{-- <td  >
                            <input style="display:none;" value="{{ $est->id }}" id="estudiante_id" name="estudiante_id"  >
                            {{ $est->nombre}} {{ $est->apellido}}            
                        </td> --}}
                        <td><input type="number" id="E1_1"                  name="E1_1" size="1" value="{{$notas->E1_1}}" ></td>
                        <td><input type="number" id="E2_1"                  name="E2_1" size="1" value="{{$notas->E2_1}}" ></td>
                        <td><input type="number" id="E3_1"                  name="E3_1" size="1" value="{{$notas->E3_1}}" ></td>
                        <td><input type="number" id="E4_1"                 name="E4_1" size="1" value="{{$notas->E4_1}}" ></td>
                        <td><input type="number" id="EF_1"                 name="EF_1" size="1" value="{{$notas->EF_1}}" ></td>
                        <td><input type="number" id="E1_2"                  name="E1_2" size="1" value="{{$notas->E1_2}}" ></td>
                        <td><input type="number" id="E2_2"                  name="E2_2" size="1" value="{{$notas->E2_2}}" ></td>
                        <td><input type="number" id="E3_2"                  name="E3_2" size="1" value="{{$notas->E3_2}}" ></td>
                        <td><input type="number" id="E4_2"                 name="E4_2" size="1" value="{{$notas->E4_2}}" ></td>
                        <td><input type="number" id="EF_2"                 name="EF_2" size="1" value="{{$notas->EF_2}}" ></td>
                        <td><input type="number" id="E1_3"                  name="E1_3" size="1" value="{{$notas->E1_3}}" ></td>
                        <td><input type="number" id="E2_3"                  name="E2_3" size="1" value="{{$notas->E2_3}}" ></td>
                        <td><input type="number" id="E3_3"                  name="E3_3" size="1" value="{{$notas->E3_3}}" ></td>
                        <td><input type="number" id="E4_3"                 name="E4_3" size="1" value="{{$notas->E4_3}}" ></td>
                        <td><input type="number" id="EF_3"                 name="EF_3" size="1" value="{{$notas->EF_3}}" ></td>
                        {{-- <tr>
                            @endforeach      
                        </tr> --}}
                    </tbody>
                </table>
                <div class="text-center">
                    {{-- <button type="submit" class="btn btn-success loginbtn">Guardar</button> --}}
                <button class="btn btn-default"><a href="{{route('notas.index')}}">Atras</a></button>
                </div> 
            </form>
        </div>
    </div>
</div>
@endsection