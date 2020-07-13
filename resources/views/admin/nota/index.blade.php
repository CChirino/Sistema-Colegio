@extends('layouts.admin')

@section('titulo', 'Lista de Profesores')

@section('content')
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list single-page-breadcome">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="#">Profesores</a> <span class="bread-slash">/</span>
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
                <th>Materias</th>
                <th colspan="3">Transacciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach($materias as $mat)
            <tr>
                <td>{{$mat->nombre_materia}}</td>
                <td><a class="btn btn-success" href="{{ route('notas.create') }}"> <i class="fas fa-plus-circle"></i> Agregar nota</a></td>    
                <td><a class="btn btn-info" href="{{ route('notas.show',$mat->id) }}"> <i class="far fa-eye"></i> Ver</a></td>
                <td><a class="btn btn-warning" href="{{ route('notas.edit',$mat->id) }}"> <i class="far fa-edit"></i> Editar</a></td>

                {{-- <td>
                <form action="{{ route('profesor.destroy',$prf->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button  class="btn btn-danger" type="submit" onclick="return confirm('Desea Borrar?');" >
                        <i class="fas fa-trash"></i> 
                        Eliminar
                    </button>
                </form>
                </td> --}}
                @endforeach
            </tr>
        </tbody>
    </table>
    <div>
        {{-- {{$materias->links()}}  --}}
    </div>
</div>
@endsection