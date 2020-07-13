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
<div class="container">
    <form action="" method="post">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th> Estudiantes</th>
                    <th> IL-I </th>
                    <th> IL-G </th>
                    <th> IL-F </th>
                    <th> IIL-I </th>
                    <th> IIL-G </th>
                    <th> IIL-F </th>
                    <th> IIIL-I </th>
                    <th> IIIL-G </th>
                    <th> IIIL-F </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($estudiante as $est)
                    <td>
                        {{$est->nombre}}
                    </td>                   
                @endforeach
                <td>
                    <input type="number" name="IL-I" id="IL-I" size="2" >
                </td>
                <td>
                    <input type="number" name="IL-G" id="IL-G" size="2" >
                </td>
                <td>
                    <input type="number" name="IL-F" id="IL-F" size="2" >
                </td>
                <td>
                    <input type="number" name="IIL-I" id="IIL-I" size="2" >
                </td>
                <td>
                    <input type="number" name="IIL-G" id="IIL-G" size="2" >
                </td>
                <td>
                    <input type="number" name="IIL-F" id="IIL-F" size="2" >
                </td>            
                <td>
                    <input type="number" name="IIIL-I" id="IIIL-I" size="2" >
                </td>
                <td>
                    <input type="number" name="IIIL-G" id="IIIL-G" size="2" >
                </td>
                <td>
                    <input type="number" name="IIIL-F" id="IIIL-F" size="2" >
                </td>
            </tbody>
        </table>
        {{-- <div class="text-center">
            <button type="submit" class="btn btn-success loginbtn">Guardar</button>
            <button class="btn btn-default">Cancelar</button>
        </div> --}}
    </form>
</div>
@endsection