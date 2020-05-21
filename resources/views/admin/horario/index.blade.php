@extends('layouts.admin')

@section('titulo', 'Lista de Horarios')

@section('content')
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list single-page-breadcome">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <td><a class="btn btn-success" href="{{ route('horarios.create') }}"> <i class="fas fa-plus-circle"></i> Crear Horario</a></td>    
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="#">Horarios</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">@yield('titulo')</span>
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
<!-- Static Table Start -->
<div class="container">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Dia</th>
                <th>Horario</th>
                <th>Aula</th>
                <th>Cupos</th>
                <th>Materia</th>

                <th colspan="3">Transacciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach($horarios as $h)
            <tr>
                <td>{{$h->dia}}</td>
                <td>{{$h->horario}}</td>
                <td>{{$h->aula}}</td>
                <td>{{$h->cupos}}</td>
                <td>{{$h->nombre_materia}}</td>
                <td><a class="btn btn-info" href="{{ route('horarios.show',$h->id) }}"> <i class="far fa-eye"></i> Ver</a></td>
                <td><a class="btn btn-warning" href="{{ route('horarios.edit',$h->id) }}"> <i class="far fa-edit"></i> Editar</a></td>
                <td>
                <form action="{{ route('horarios.destroy',$h->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button  class="btn btn-danger" type="submit" onclick="return confirm('Desea Borrar?');" >
                        <i class="fas fa-trash"></i> 
                        Eliminar
                    </button>
                </form>
                </td>
                @endforeach
            </tr>
        </tbody>
    </table>
    <div>
        {{$horarios->links()}} 
    </div>
</div>
@endsection