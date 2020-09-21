@extends('layouts.admin')

@section('titulo', 'Editar Permiso')

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
                                <li><a href="#">@yield('titulo')</a> <span class="bread-slash">/</span>
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
    @include('custom.message')
    <div class="hpanel">
        <div class="panel-body">
        <form action="{{route('permisos.update',$permisos->id)}}" method="POST" enctype="multipart/form-data" >
                @csrf
                @method('put')
                <div class="row">
                    <div class="form-group col-lg-6">
                        <label>Nombre</label>
                        <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $permisos->name }}">
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Slug</label>
                        <input type="text" id="slug" class="form-control @error('slug') is-invalid @enderror" name="slug" value="{{ $permisos->slug }}">
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Descripcion</label>
                        <input type="text" id="description" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ $permisos->description }}">
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success loginbtn">Actualizar</button>
                    <a  class="btn btn-success loginbtn"href="{{route('permisos.index')}}" style="height: 38px;">Atras</a>               
                </div>
            </form>
        </div>
    </div>
</div>
@endsection