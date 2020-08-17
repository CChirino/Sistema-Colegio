@extends('layouts.admin')

@section('titulo', 'Editar Role')

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
                                <li><a href="#">Roles</a> <span class="bread-slash">/</span>
                                </li>
                                <li><a href="#">@yield('titulo')</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">{{$role->name}}</span>
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
        <form action="{{route('roles.update',$role->id)}}" method="POST" enctype="multipart/form-data" >
                @csrf
                @method('put')
                <div class="row">
                    <div class="form-group col-lg-12">
                        <label>Nombre</label>
                        <input type="text" id="name"  class="form-control" name="name" value="{{$role->name}}">
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Full Acces</label> <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="full-access" id="full-access-yes" value='si'
                            @if ( $role['full-access']=="si") 
                            checked 
                            @elseif (old('full-access')=="si") 
                            checked 
                            @endif>

                            <label class="form-check-label" for="inlineRadio1">si</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="full-access" id="full-access-no" value='no'
                            @if ( $role['full-access']=="no") 
                            checked 
                            @elseif (old('full-access')=="no") 
                            checked 
                            @endif>
                            <label class="form-check-label" for="inlineRadio2">no</label>
                          </div>
                        @error('full-access')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-lg-12">

                        @foreach ($permiso as $per)
                            
                        <div class="form-group form-check">
                            <input type="checkbox" 
                            class="custom-control-input" 
                            id="permission_{{$per->id}}"
                            value="{{$per->id}}"
                            name="permission[]" 
                            @if( is_array(old('permission')) && in_array("$per->id", old('permission'))    )
                            checked

                            @elseif( is_array($permission_role) && in_array("$per->id", $permission_role)    )
                            checked

                            @endif>

                            <label class="custom-control-label" 
                                for="permission_{{$per->id}}">
                                {{ $per->id }}
                                - 
                                {{ $per->name }} 
                            </label>
                          </div>
                        @endforeach

                        {{-- <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror --}}
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success loginbtn">Actualizar</button>
                    <a  class="btn btn-success loginbtn"href="{{route('roles.index')}}" style="height: 38px;">Atras</a>               
                </div>
            </form>
        </div>
    </div>
</div>
@endsection