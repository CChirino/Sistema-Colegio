<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Eskuela Virtual - @yield('titulo')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('asset/img/logo-k-ekuela.png')}}" width="48" height="48 ">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9afc1391aa.js" crossorigin="anonymous"></script>    
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <x-embed-styles />

</head>

<body>
  <div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="{{ route('home')}}"><img class="main-logo" src="{{ asset('asset/img/logo/LogoEscuela.png')}}" alt="" width='200' height="60"    /></a>
            {{-- <strong><a href="index.html"><img src="{{ asset('asset/img/logo/logosn.png')}}" alt="" /></a></strong> --}}
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false"><span class="icon-wrap" ><i class="fa fa-user"></i></span> <span class="mini-click-non">Perfil</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Perfil" href="{{ route('perfil.index')}}"><span class="mini-sub-pro">Mi perfil</span></a></li>
                        </ul>
                    </li>
                    @can('haveaccess', 'notas-estudiante.index')
                    <li>
                        <a class="has-arrow" href="{{ route('notas-estudiante.show',auth()->user()->id)}}" aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non">Calificaciones Est</span></a>                        
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Materias" href="{{ route('notas-estudiante.show',auth()->user()->id) }}"><span class="mini-sub-pro">Calificaciones</span></a></li>
                            {{-- <li><a title="Notas" href="{{ route('notas.create')}}"><span class="mini-sub-pro">Agregar Notas</span></a></li> --}}
                        </ul>
                    </li>
                    @endcan
                    @can('haveaccess', 'notas.index')
                    <li>
                        <a class="has-arrow" href="{{ route('notas.index')}}" aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non">Calificaciones Prf</span></a>                        
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Materias" href="{{ route('notas.index')}}"><span class="mini-sub-pro">Estudiantes</span></a></li>
                            {{-- <li><a title="Notas" href="{{ route('notas.create')}}"><span class="mini-sub-pro">Agregar Notas</span></a></li> --}}
                        </ul>
                    </li>
                    @endcan
                    <li>
                        @can('haveaccess', 'inscripciones-estudiante.create')
                        <a class="has-arrow" href="{{ route('inscripciones-estudiante.create')}}" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap"></span> <span class="mini-click-non">Inscripcion</span></a>                        
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Inscripcion" href="{{ route('inscripciones-estudiante.create')}}"><span class="mini-sub-pro">Crear Inscripcion </span></a></li>
                            {{-- <li><a title="Notas" href="{{ route('notas.create')}}"><span class="mini-sub-pro">Agregar Notas</span></a></li> --}}
                        </ul>
                        @endcan
                    </li>
                    <li>
                        @can('haveaccess', 'listado-estudiantes.index')
                        <a class="has-arrow" href="{{ route('listado-estudiantes.index')}}" aria-expanded="false"><span class="icon-wrap"><i class="fas fa-clipboard-list"></i></span> <span class="mini-click-non">Listado Est.</span></a>                        
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Listado de estudiantes" href="{{ route('listado-estudiantes.index')}}"><span class="mini-sub-pro">Listado Estudiantes </span></a></li>
                            {{-- <li><a title="Notas" href="{{ route('notas.create')}}"><span class="mini-sub-pro">Agregar Notas</span></a></li> --}}
                        </ul>
                        @endcan
                    </li>
                    @can('haveaccess', 'evaluaciones.create')
                    <li>
                        <a class="has-arrow" href="{{ route('evaluaciones.create')}}" aria-expanded="false"><span class="icon-wrap"><i class="far fa-file"></i></span> <span class="mini-click-non">Evaluaciones Prf</span></a>                        
                        @endcan
                        @can('haveaccess', 'evaluaciones.create')
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Listado de Evaluaciones" href="{{ route('evaluaciones.create')}}"><span class="mini-sub-pro">Crear Evaluacion</span></a></li>
                        @endcan
                        @can('haveaccess', 'subir-evaluacion-estudiante.index')
                        <li><a title="Listado de Evaluaciones" href="{{ route('subir-evaluacion-estudiante.index')}}"><span class="mini-sub-pro">Evaluaciones de Estudiantes</span></a></li>
                        @endcan
                        @can('haveaccess', 'listar-evaluaciones.index')
                            <li><a title="Listado de Evaluaciones" href="{{ route('listar-evaluaciones.index')}}"><span class="mini-sub-pro">Listar Evaluaciones</span></a></li>
                        @endcan
                        @can('haveaccess', 'opinion-evaluaciones.index')
                            <li><a title="Listado de Opinion Evaluaciones" href="{{ route('opinion-evaluaciones.index')}}"><span class="mini-sub-pro"> Listado de Opinion Evaluaciones</span></a></li>
                        </ul>
                    </li>
                    @endcan
                    @can('haveaccess', 'evaluacion-estudiante.index')
                    <li>
                        <a class="has-arrow" href="{{ route('evaluacion-estudiante.index')}}" aria-expanded="false"><span class="icon-wrap"><i class="far fa-file"></i></span> <span class="mini-click-non">Evaluaciones Est</span></a>                        
                        @endcan
                        @can('haveaccess', 'evaluacion-estudiante.index')
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Listado de Evaluaciones" href="{{ route('evaluacion-estudiante.index')}}"><span class="mini-sub-pro">Evaluaciones</span></a></li>
                        @endcan
                        @can('haveaccess', 'subir-evaluacion-estudiante.create')
                            <li><a title="Listado de Evaluaciones" href="{{ route('subir-evaluacion-estudiante.create')}}"><span class="mini-sub-pro"> Subir Evaluaciones</span></a></li>
                        @endcan
                        @can('haveaccess', 'ver-evaluacion.index')
                        <li><a title="Evaluaciones Subidas" href="{{ route('ver-evaluacion.index')}}"><span class="mini-sub-pro"> Evaluaciones Subidas</span></a></li>
                    </ul>
                    </li>
                    @endcan
                    @can('haveaccess', 'clases-en-linea.index')
                    <li>
                        <a class="has-arrow" href="{{ route('clases-en-linea.index')}}" aria-expanded="false"><span class="icon-wrap"><i class="fas fa-video"></i></span> <span class="mini-click-non">Video Clases</span></a>                        
                        @endcan
                        @can('haveaccess', 'clases-en-linea.index')
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Listado de Clase" href="{{ route('clases-en-linea.index')}}"><span class="mini-sub-pro">Listado de Video Clases </span></a></li>
                        @endcan
                        @can('haveaccess', 'clases-en-linea.create')
                            <li><a title="Crear Clase" href="{{ route('clases-en-linea.create')}}"><span class="mini-sub-pro">Crear Video Clase</span></a></li>
                        </ul>
                    </li>
                    @endcan
                    @can('haveaccess', 'ver-clase-en-linea.index')
                    <li>
                        <a class="has-arrow" href="{{ route('ver-clase-en-linea.index')}}" aria-expanded="false"><span class="icon-wrap"><i class="fas fa-play"></i></span> <span class="mini-click-non"> Ver Video Clases</span></a>                        
                        @endcan
                        @can('haveaccess', 'ver-clase-en-linea.index')
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Ver Clases en Linea" href="{{ route('ver-clase-en-linea.index')}}"><span class="mini-sub-pro">Listado de Video Clases </span></a></li>
                        </ul>
                    </li>    
                    @endcan
                    @can('haveaccess', 'horario-estudiante.index')
                    <li>
                        <a class="has-arrow" href="{{ route('horario-estudiante.index')}}" aria-expanded="false"><span class="icon-wrap"><i class="far fa-clock"></i></span> <span class="mini-click-non">Horarios Est</span></a>
                        @endcan
                    @can('haveaccess', 'horario-estudiante.index')
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Todos los horarios" href="{{ route('horario-estudiante.index')}}"><span class="mini-sub-pro">Listado de horarios</span></a></li>\
                        </ul>
                    </li>
                    @endcan
                    @can('haveaccess', 'horario-profesor.index')
                    <li>
                        <a class="has-arrow" href="{{ route('horario-profesor.index')}}" aria-expanded="false"><span class="icon-wrap"><i class="far fa-clock"></i></span> <span class="mini-click-non">Horarios Prof</span></a>
                        @endcan
                        @can('haveaccess', 'horario-profesor.index')
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Todos los horarios" href="{{ route('horario-profesor.index')}}"><span class="mini-sub-pro">Listado de horarios</span></a></li>\
                        </ul>
                    </li>
                    @endcan
                    <li>
                        <a class="has-arrow" href="{{ route('chat')}}" aria-expanded="false"><span class="icon-wrap"><i class="far fa-comments"></i></span> <span class="mini-click-non">Chat</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Todos los horarios" href="{{ route('chat')}}"><span class="mini-sub-pro">Chat</span></a></li>
                        </ul>
                    </li>
                    @can('haveaccess', 'estudiante.index')
                    <li>
                        <a class="has-arrow" href="{{ route('estudiante.index')}}" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Usuarios</span></a>
                        @endcan

                        <ul class="submenu-angle" aria-expanded="false">
                            @can('haveaccess', 'usuarios.index')
                            <li><a title="Usuarios" href="{{ route('usuarios.index')}}"><span class="mini-sub-pro">Usuarios</span></a></li>
                            @endcan
                            @can('haveaccess', 'admin.index')
                            <li><a title="Administradores" href="{{ route('admin.index')}}"><span class="mini-sub-pro">Administradores</span></a></li>
                            @endcan
                            @can('haveaccess', 'estudiante.index')
                            <li><a title="Estudiantes" href="{{ route('estudiante.index')}}"><span class="mini-sub-pro">Estudiantes</span></a></li>
                            @endcan
                            @can('haveaccess', 'profesor.index')
                            <li><a title="Profesores" href="{{ route('profesor.index')}}"><span class="mini-sub-pro">Profesores</span></a></li>
                            @endcan
                            @can('haveaccess', 'coordinador.index')
                            <li><a title="Coordinador" href="{{ route('coordinador.index')}}"><span class="mini-sub-pro">Coodinador </span></a></li>
                            @endcan
                            @can('haveaccess', 'colegio.index')
                            <li><a title="Colegio" href="{{ route('colegio.index')}}"><span class="mini-sub-pro">Colegio</span></a></li>
                            
                        </ul>
                    </li>
                    @endcan
                    @can('haveaccess', 'roles.index')
                    <li>

                        <a class="has-arrow" href="{{ route('roles.index')}}" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Roles</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Todos los roles" href="{{ route('roles.index')}}"><span class="mini-sub-pro">Todos los Roles</span></a></li>
                    @endcan
                    @can('haveaccess', 'roles.create')

                            <li><a title="Crear Rol" href="{{ route('roles.create')}}"><span class="mini-sub-pro">Crear Role</span></a></li>
                            {{-- <li><a title="Students Profile" href="student-profile.html"><span class="mini-sub-pro">Student Profile</span></a></li> --}}
                        </ul>
                    </li>
                    @endcan
                    @can('haveaccess', 'permisos.index')
                    <li>
                        <a class="has-arrow" href="{{ route('permisos.index')}}" aria-expanded="false"><span class="icon-wrap"><i class="fas fa-lock"></i></span> <span class="mini-click-non"> Permisos</span></a>                        
                        @endcan
                        @can('haveaccess', 'permisos.index')
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Permisos" href="{{ route('permisos.index')}}"><span class="mini-sub-pro">Listado de Permisos </span></a></li>
                        </ul>
                    </li>    
                    @endcan
                    @can('haveaccess', 'materias.index')
                    <li>
                        <a class="has-arrow" href="{{ route('materias.index')}}" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Materias</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Todas las materias" href="{{ route('materias.index')}}"><span class="mini-sub-pro">Todas las materias</span></a></li>
                    @endcan
                    @can('haveaccess', 'materias.create')
                            <li><a title="Crear Materia" href="{{ route('materias.create')}}"><span class="mini-sub-pro">Crear Materia</span></a></li>
                        </ul>
                    </li>
                    @endcan
                    @can('haveaccess', 'horarios.index')
                    <li>
                        <a class="has-arrow" href="{{ route('horarios.index')}}" aria-expanded="false"><span class="educate-icon educate-department icon-wrap"></span> <span class="mini-click-non">Horarios</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Todos los horarios" href="{{ route('horarios.index')}}"><span class="mini-sub-pro">Todos los horarios</span></a></li>\
                    @endcan
                    @can('haveaccess', 'horarios.create')
                            <li><a title="Crear Horario" href="{{ route('horarios.create')}}"><span class="mini-sub-pro">Crear Horario</span></a></li>
                        </ul>
                    </li>
                    @endcan
                    @can('haveaccess', 'periodos.index')
                    <li>
                        <a class="has-arrow" href="{{ route('periodos.index')}}" aria-expanded="false"><span class="educate-icon educate-form icon-wrap"></span> <span class="mini-click-non">Periodo</span></a>
                        <ul class="submenu-angle form-mini-nb-dp" aria-expanded="false">
                            <li><a title="Todos los periodos" href="{{ route('periodos.index')}}"><span class="mini-sub-pro">Todos los periodos</span></a></li>
                    @endcan
                    @can('haveaccess', 'periodos.create')
                            <li><a title="Crear Periodo" href="{{ route('periodos.create')}}"><span class="mini-sub-pro">Crear Periodo</span></a></li>
                        </ul>
                    </li>
                    @endcan
                    @can('haveaccess', 'usuario-rol.index')
                    <li>
                        <a class="has-arrow" href="{{ route('usuario-rol.index')}}" aria-expanded="false"><span class="icon-wrap"><i class="fas fa-users-cog"></i></span> <span class="mini-click-non">Cambio de Rol</span></a>                        
                        @endcan
                        @can('haveaccess', 'usuario-rol.index')
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Listado de Evaluaciones" href="{{ route('usuario-rol.index')}}"><span class="mini-sub-pro">Usuarios con rol</span></a></li>
                        @endcan
                        @can('haveaccess', 'subir-evaluacion-estudiante.create')
                            <li><a title="Listado de Evaluaciones" href="{{ route('subir-evaluacion-estudiante.create')}}"><span class="mini-sub-pro"></span></a></li>
                        </ul>
                    </li>
                    @endcan
                    @can('haveaccess', 'subir-evaluacion-admin.index')
                    <li>
                        <a class="has-arrow" href="{{ route('subir-evaluacion-admin.index')}}" aria-expanded="false"><span class="icon-wrap"><i class="far fa-list-alt"></i></span> <span class="mini-click-non">Evaluaciones Admin</span></a>                        
                        @endcan
                        @can('haveaccess', 'subir-evaluacion-admin.index')
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Listado de Evaluaciones" href="{{ route('subir-evaluacion-admin.index')}}"><span class="mini-sub-pro">Listado Evaluaciones</span></a></li>
                        </ul>
                    </li>
                    @endcan
                    {{-- @can('haveaccess', 'inscripciones.create')
                    <li>
                        <a class="has-arrow" href="{{ route('inscripciones.create')}}" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap"></span> <span class="mini-click-non">Inscripcion Adm. </span></a>
                    </li>                         
                    @endcan --}}
                </ul>
            </nav>
        </div>
    </nav>
</div>
<!-- End Left menu area -->
<!-- Start Welcome area -->
<div class="all-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="logo-pro">
                    <a href="index.html"><img src="{{ asset('asset/img/logo/LogoEscuela.png')}}" width="150"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="header-advance-area">
        <div class="header-top-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="header-top-wraper">
                            <div class="row">
                                <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                    <div class="menu-switcher-pro">
                                        <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                <i class="educate-icon educate-nav"></i>
                                            </button>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                    <div class="header-top-menu tabl-d-n">
                                        <ul class="nav navbar-expand-lg navbar-nav mai-top-nav">
                                            <li class="nav-item"><a href="{{ route('home')}}" class="nav-link">Inicio</a>
                                            </li>
                                            {{-- <li class="nav-item"><a href="#" class="nav-link">About</a>
                                            </li>
                                            <li class="nav-item"><a href="#" class="nav-link">Services</a>
                                            </li> --}}
                                            {{-- <li class="nav-item dropdown res-dis-nn">
                                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">Project <span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
                                                <div role="menu" class="dropdown-menu animated zoomIn">
                                                    <a href="#" class="dropdown-item">Documentation</a>
                                                    <a href="#" class="dropdown-item">Expert Backend</a>
                                                    <a href="#" class="dropdown-item">Expert FrontEnd</a>
                                                    <a href="#" class="dropdown-item">Contact Support</a>
                                                </div>
                                            </li> --}}
                                            <li class="nav-item"><a target="_blank" href="https://eskuelavirtual.com/soporte/" class="nav-link">Soporte</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                    <div class="header-right-info">
                                        <ul class="nav navbar-nav mai-top-nav header-right-menu navbar-expand-lg">
                                            {{-- <li class="nav-item dropdown">
                                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-message edu-chat-pro" aria-hidden="true"></i><span class="indicator-ms"></span></a>
                                                <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                    <div class="message-single-top">
                                                        <h1>Message</h1>
                                                    </div>
                                                    <ul class="message-menu">
                                                        <li>
                                                            <a href="#">
                                                                <div class="message-img">
                                                                    <img src="{{ asset('asset/img/contact/1.jpg ')}}" alt="">
                                                                </div>
                                                                <div class="message-content">
                                                                    <span class="message-date">16 Sept</span>
                                                                    <h2>Advanda Cro</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="message-img">
                                                                    <img src="{{ asset('asset/img/contact/4.jpg ')}}" alt="">
                                                                </div>
                                                                <div class="message-content">
                                                                    <span class="message-date">16 Sept</span>
                                                                    <h2>Sulaiman din</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="message-img">
                                                                    <img src="{{ asset('asset/img/contact/3.jpg ')}}" alt="">
                                                                </div>
                                                                <div class="message-content">
                                                                    <span class="message-date">16 Sept</span>
                                                                    <h2>Victor Jara</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="message-img">
                                                                    <img src="{{ asset('asset/img/contact/2.jpg ')}}" alt="">
                                                                </div>
                                                                <div class="message-content">
                                                                    <span class="message-date">16 Sept</span>
                                                                    <h2>Victor Jara</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="message-view">
                                                        <a href="#">View All Messages</a>
                                                    </div>
                                                </div>
                                            </li> --}}
                                            {{-- <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-bell" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                    <div class="notification-single-top">
                                                        <h1>Notifications</h1>
                                                    </div>
                                                    <ul class="notification-menu">
                                                        <li>
                                                            <a href="#">
                                                                <div class="notification-icon">
                                                                    <i class="educate-icon educate-checked edu-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                                </div>
                                                                <div class="notification-content">
                                                                    <span class="notification-date">16 Sept</span>
                                                                    <h2>Advanda Cro</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="notification-icon">
                                                                    <i class="fa fa-cloud edu-cloud-computing-down" aria-hidden="true"></i>
                                                                </div>
                                                                <div class="notification-content">
                                                                    <span class="notification-date">16 Sept</span>
                                                                    <h2>Sulaiman din</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="notification-icon">
                                                                    <i class="fa fa-eraser edu-shield" aria-hidden="true"></i>
                                                                </div>
                                                                <div class="notification-content">
                                                                    <span class="notification-date">16 Sept</span>
                                                                    <h2>Victor Jara</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="notification-icon">
                                                                    <i class="fa fa-line-chart edu-analytics-arrow" aria-hidden="true"></i>
                                                                </div>
                                                                <div class="notification-content">
                                                                    <span class="notification-date">16 Sept</span>
                                                                    <h2>Victor Jara</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="notification-view">
                                                        <a href="#">View All Notification</a>
                                                    </div>
                                                </div>
                                            </li> --}}
                                            <li class="nav-item pl-2 pr-2" ><img src="{{asset('asset/img/logo/logo-colegio.jpeg')}}" alt="" style="
                                                width: 40px;
                                                border-radius: 50%;
                                            "></li>
                                            <li class="nav-item pl-2 mt-1" > <p>Colegio Calicantina</p> </li>
                                            <li class="nav-item">
                                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link">
                                                        <img src="{{asset('storage/'.Auth::user()->image)}} " alt="" />
                                                        <span class="admin-name">{{ auth()->user()->nombre }} </span>
                                            </li>
                                            <li class="nav-item"> 
                                                    <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                    {{-- {{ __('') }} --}}
                                                    <i class="fas fa-sign-out-alt"></i>
                                                    </a>
                        
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                            </li>
                                            {{-- <li class="nav-item nav-setting-open"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-menu"></i></a>
                                                <div>

                                                </div> --}}
                                                {{-- <div role="menu" class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated zoomIn"> --}}
                                                    {{-- <ul class="nav nav-tabs custon-set-tab">
                                                        <li class="active"><a data-toggle="tab" href="#Notes">Notes</a>
                                                        </li>
                                                        <li><a data-toggle="tab" href="#Projects">Projects</a>
                                                        </li>
                                                        <li><a data-toggle="tab" href="#Settings">Settings</a>
                                                        </li>
                                                        <li data-toggle="tab" >
                                                            {{-- <a class="nav-link">
                                                                <span class="no-icon">Cerrar Sesion</span>
                                                            </a> --}}
                                                            {{-- <a href="{{ route('logout') }}"
                                                                onclick="event.preventDefault();
                                                                                document.getElementById('logout-form').submit();">
                                                                {{ __('Cerrar sesión') }}
                                                            </a>
                                
                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                @csrf
                                                            </form>
                                                        </li>
                                                    </ul> --}} 

                                                    {{-- <div class="tab-content custom-bdr-nt">
                                                        <div id="Notes" class="tab-pane fade in active">
                                                            <div class="notes-area-wrap">
                                                                <div class="note-heading-indicate">
                                                                    <h2><i class="fa fa-comments-o"></i> Latest Notes</h2>
                                                                    <p>You have 10 new message.</p>
                                                                </div>
                                                                <div class="notes-list-area notes-menu-scrollbar">
                                                                    <ul class="notes-menu-list">
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="{{ asset('asset/img/contact/4.jpg ')}}" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="{{ asset('asset/img/contact/1.jpg ')}}" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="{{ asset('asset/img/contact/2.jpg ')}}" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="{{ asset('asset/img/contact/3.jpg ')}}" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="{{ asset('asset/img/contact/4.jpg ')}}" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="{{ asset('asset/img/contact/1.jpg ')}}" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="{{ asset('asset/img/contact/2.jpg ')}}" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="{{ asset('asset/img/contact/1.jpg ')}}" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="{{ asset('asset/img/contact/2.jpg ')}}" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="{{ asset('asset/img/contact/3.jpg ')}}" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="Projects" class="tab-pane fade">
                                                            <div class="projects-settings-wrap">
                                                                <div class="note-heading-indicate">
                                                                    <h2><i class="fa fa-cube"></i> Latest projects</h2>
                                                                    <p> You have 20 projects. 5 not completed.</p>
                                                                </div>
                                                                <div class="project-st-list-area project-st-menu-scrollbar">
                                                                    <ul class="projects-st-menu-list">
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="project-list-flow">
                                                                                    <div class="projects-st-heading">
                                                                                        <h2>Web Development</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class="project-st-time">1 hours ago</span>
                                                                                    </div>
                                                                                    <div class="projects-st-content">
                                                                                        <p>Completion with: 28%</p>
                                                                                        <div class="progress progress-mini">
                                                                                            <div style="width: 28%;" class="progress-bar progress-bar-danger hd-tp-1"></div>
                                                                                        </div>
                                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="project-list-flow">
                                                                                    <div class="projects-st-heading">
                                                                                        <h2>Software Development</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class="project-st-time">2 hours ago</span>
                                                                                    </div>
                                                                                    <div class="projects-st-content project-rating-cl">
                                                                                        <p>Completion with: 68%</p>
                                                                                        <div class="progress progress-mini">
                                                                                            <div style="width: 68%;" class="progress-bar hd-tp-2"></div>
                                                                                        </div>
                                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="project-list-flow">
                                                                                    <div class="projects-st-heading">
                                                                                        <h2>Graphic Design</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class="project-st-time">3 hours ago</span>
                                                                                    </div>
                                                                                    <div class="projects-st-content">
                                                                                        <p>Completion with: 78%</p>
                                                                                        <div class="progress progress-mini">
                                                                                            <div style="width: 78%;" class="progress-bar hd-tp-3"></div>
                                                                                        </div>
                                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="project-list-flow">
                                                                                    <div class="projects-st-heading">
                                                                                        <h2>Web Design</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class="project-st-time">4 hours ago</span>
                                                                                    </div>
                                                                                    <div class="projects-st-content project-rating-cl2">
                                                                                        <p>Completion with: 38%</p>
                                                                                        <div class="progress progress-mini">
                                                                                            <div style="width: 38%;" class="progress-bar progress-bar-danger hd-tp-4"></div>
                                                                                        </div>
                                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="project-list-flow">
                                                                                    <div class="projects-st-heading">
                                                                                        <h2>Business Card</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class="project-st-time">5 hours ago</span>
                                                                                    </div>
                                                                                    <div class="projects-st-content">
                                                                                        <p>Completion with: 28%</p>
                                                                                        <div class="progress progress-mini">
                                                                                            <div style="width: 28%;" class="progress-bar progress-bar-danger hd-tp-5"></div>
                                                                                        </div>
                                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="project-list-flow">
                                                                                    <div class="projects-st-heading">
                                                                                        <h2>Ecommerce Business</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class="project-st-time">6 hours ago</span>
                                                                                    </div>
                                                                                    <div class="projects-st-content project-rating-cl">
                                                                                        <p>Completion with: 68%</p>
                                                                                        <div class="progress progress-mini">
                                                                                            <div style="width: 68%;" class="progress-bar hd-tp-6"></div>
                                                                                        </div>
                                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="project-list-flow">
                                                                                    <div class="projects-st-heading">
                                                                                        <h2>Woocommerce Plugin</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class="project-st-time">7 hours ago</span>
                                                                                    </div>
                                                                                    <div class="projects-st-content">
                                                                                        <p>Completion with: 78%</p>
                                                                                        <div class="progress progress-mini">
                                                                                            <div style="width: 78%;" class="progress-bar"></div>
                                                                                        </div>
                                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="project-list-flow">
                                                                                    <div class="projects-st-heading">
                                                                                        <h2>Wordpress Theme</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class="project-st-time">9 hours ago</span>
                                                                                    </div>
                                                                                    <div class="projects-st-content project-rating-cl2">
                                                                                        <p>Completion with: 38%</p>
                                                                                        <div class="progress progress-mini">
                                                                                            <div style="width: 38%;" class="progress-bar progress-bar-danger"></div>
                                                                                        </div>
                                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="Settings" class="tab-pane fade">
                                                            <div class="setting-panel-area">
                                                                <div class="note-heading-indicate">
                                                                    <h2><i class="fa fa-gears"></i> Settings Panel</h2>
                                                                    <p> You have 20 Settings. 5 not completed.</p>
                                                                </div>
                                                                <ul class="setting-panel-list">
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Show notifications</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example">
                                                                                        <label class="onoffswitch-label" for="example">
                                                                                                <span class="onoffswitch-inner"></span>
                                                                                                <span class="onoffswitch-switch"></span>
                                                                                            </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Disable Chat</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example3">
                                                                                        <label class="onoffswitch-label" for="example3">
                                                                                                <span class="onoffswitch-inner"></span>
                                                                                                <span class="onoffswitch-switch"></span>
                                                                                            </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Enable history</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example4">
                                                                                        <label class="onoffswitch-label" for="example4">
                                                                                                <span class="onoffswitch-inner"></span>
                                                                                                <span class="onoffswitch-switch"></span>
                                                                                            </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Show charts</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example7">
                                                                                        <label class="onoffswitch-label" for="example7">
                                                                                                <span class="onoffswitch-inner"></span>
                                                                                                <span class="onoffswitch-switch"></span>
                                                                                            </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Update everyday</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example2">
                                                                                        <label class="onoffswitch-label" for="example2">
                                                                                                <span class="onoffswitch-inner"></span>
                                                                                                <span class="onoffswitch-switch"></span>
                                                                                            </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Global search</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example6">
                                                                                        <label class="onoffswitch-label" for="example6">
                                                                                                <span class="onoffswitch-inner"></span>
                                                                                                <span class="onoffswitch-switch"></span>
                                                                                            </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Offline users</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example5">
                                                                                        <label class="onoffswitch-label" for="example5">
                                                                                                <span class="onoffswitch-inner"></span>
                                                                                                <span class="onoffswitch-switch"></span>
                                                                                            </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                {{-- </div> --}}
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
        <!-- Mobile Menu start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul class="mobile-menu-nav">
                                    <li><a title="Perfil" href="{{ route('perfil.index')}}"><span class="mini-sub-pro">Mi perfil</span></a></li>
                                    @can('haveaccess', 'notas-estudiante.index')
                                    <li><a data-toggle="collapse" data-target="#Charts" href="{{ route('notas-estudiante.index')}}">Calificaciones Estudiantes <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul class="collapse dropdown-header-top">
                                            <li><a title="Materias" href="{{ route('notas-estudiante.index')}}"><span class="mini-sub-pro">Calificaciones</span></a></li>
                                        </ul>
                                    </li>
                                    @endcan
                                    @can('haveaccess', 'notas.index')
                                    <li><a data-toggle="collapse" data-target="#demoevent" href="{{ route('notas.index')}}">Calificaciones Profesor <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="demoevent" class="collapse dropdown-header-top">
                                            <li><a title="Materias" href="{{ route('notas.index')}}"><span class="mini-sub-pro">Materias</span></a></li>
                                        </ul>
                                    </li>
                                    @endcan
                                    @can('haveaccess', 'inscripciones-estudiante.create')
                                    <li><a data-toggle="collapse" data-target="#demopro" href="{{ route('inscripciones-estudiante.create')}}">Inscripcion <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="demopro" class="collapse dropdown-header-top">
                                            <li><a title="Inscripcion" href="{{ route('inscripciones-estudiante.create')}}"><span class="mini-sub-pro">Crear Inscripcion </span></a></li>
                                        </ul>
                                    </li>
                                    @endcan
                                    @can('haveaccess', 'evaluaciones.create')
                                    <li><a data-toggle="collapse" data-target="#democrou" href="{{ route('evaluaciones.create')}}">Evaluaciones Profesor <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="democrou" class="collapse dropdown-header-top">
                                    @endcan
                                            @can('haveaccess', 'evaluaciones.create')
                                            <li><a title="Listado de Evaluaciones" href="{{ route('evaluaciones.create')}}"><span class="mini-sub-pro">Crear Evaluacion</span></a></li>
                                            @endcan
                                            @can('haveaccess', 'subir-evaluacion-estudiante.index')
                                            <li><a title="Listado de Evaluaciones" href="{{ route('subir-evaluacion-estudiante.index')}}"><span class="mini-sub-pro">Evaluaciones de Estudiantes</span></a></li>
                                            </li>
                                            @endcan
                                            @can('haveaccess', 'listar-evaluaciones.index')
                                            <li><a title="Listado de Evaluaciones" href="{{ route('listar-evaluaciones.index')}}"><span class="mini-sub-pro">Listar Evaluaciones</span></a></li>
                                            @endcan
                                            @can('haveaccess', 'opinion-evaluaciones.index')
                                            <li><a title="Listado de Opinion Evaluaciones" href="{{ route('opinion-evaluaciones.index')}}"><span class="mini-sub-pro"> Listado de Opinion Evaluaciones</span></a></li>
                                        </ul>
                                    </li>
                                    @endcan
                                    @can('haveaccess', 'evaluacion-estudiante.index')
                                    <li><a data-toggle="collapse" data-target="#demolibra" href="{{ route('evaluacion-estudiante.index')}}">Evaluaciones Estudiantes <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    @endcan    
                                    @can('haveaccess', 'evaluacion-estudiante.index')
                                        <ul id="demolibra" class="collapse dropdown-header-top">
                                            <li><a title="Listado de Evaluaciones" href="{{ route('evaluacion-estudiante.index')}}"><span class="mini-sub-pro">Evaluaciones</span></a></li>
                                            @endcan
                                            @can('haveaccess', 'subir-evaluacion-estudiante.create')
                                            <li><a title="Listado de Evaluaciones" href="{{ route('subir-evaluacion-estudiante.create')}}"><span class="mini-sub-pro"> Subir Evaluaciones</span></a></li>
                                            @endcan
                                            @can('haveaccess', 'ver-evaluacion.index')
                                            <li><a title="Evaluaciones Subidas" href="{{ route('ver-evaluacion.index')}}"><span class="mini-sub-pro"> Evaluaciones Subidas</span></a></li>
                                            @endcan
                                            @can('haveaccess', 'opinion-evaluaciones-estudiantes.index')
                                            <li><a title="Opinion Evaluaciones" href="{{ route('opinion-evaluaciones-estudiantes.index')}}"><span class="mini-sub-pro"> Opinion Evaluaciones</span></a></li>
                                        </ul>
                                    </li>
                                    @endcan
                                    @can('haveaccess', 'clases-en-linea.index')
                                    <li><a data-toggle="collapse" data-target="#demodepart" href="{{ route('clases-en-linea.index')}}">Video Clases <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="demodepart" class="collapse dropdown-header-top">
                                            @endcan
                                            @can('haveaccess', 'clases-en-linea.index')
                                            <li><a title="Listado de Clase" href="{{ route('clases-en-linea.index')}}"><span class="mini-sub-pro">Listado de Video Clases </span></a></li>
                                            @endcan
                                            @can('haveaccess', 'clases-en-linea.create')
                                            <li><a title="Crear Clase" href="{{ route('clases-en-linea.create')}}"><span class="mini-sub-pro">Crear Video Clase</span></a></li>
                                        </ul>
                                    </li>
                                    @endcan
                                    @can('haveaccess', 'ver-clase-en-linea.index')
                                    <li><a data-toggle="collapse" data-target="#demo" href="{{ route('ver-clase-en-linea.index')}}">Ver Video Clases <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    @endcan
                                    @can('haveaccess', 'ver-clase-en-linea.index')
                                        <ul id="demo" class="collapse dropdown-header-top">
                                            <li><a title="Ver Clases en Linea" href="{{ route('ver-clase-en-linea.index')}}"><span class="mini-sub-pro">Listado de Video Clases </span></a></li>
                                        </ul>
                                    </li>
                                    @endcan
                                    @can('haveaccess', 'usuarios.index')
                                    <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="{{ route('usuarios.index')}}">Usuarios <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                            @endcan
                                            @can('haveaccess', 'admin.index')
                                            <li><a title="Administradores" href="{{ route('admin.index')}}"><span class="mini-sub-pro">Administradores</span></a></li>
                                            @endcan
                                            @can('haveaccess', 'estudiante.index')
                                            <li><a title="Estudiantes" href="{{ route('estudiante.index')}}"><span class="mini-sub-pro">Estudiantes</span></a></li>
                                            @endcan
                                            @can('haveaccess', 'profesor.index')
                                            <li><a title="Profesores" href="{{ route('profesor.index')}}"><span class="mini-sub-pro">Profesores</span></a></li>
                                            @endcan
                                            @can('haveaccess', 'coordinador.index')
                                            <li><a title="Coordinador" href="{{ route('coordinador.index')}}"><span class="mini-sub-pro">Coodinador </span></a></li>                                        </li>
                                            @endcan
                                            @can('haveaccess', 'colegio.index')
                                            <li><a title="Colegio" href="{{ route('colegio.index')}}"><span class="mini-sub-pro">Colegio</span></a></li>
                                            @endcan
                                            @can('haveaccess', 'usuarios.index')
                                            <li><a title="Usuarios" href="{{ route('usuarios.index')}}"><span class="mini-sub-pro">Usuarios</span></a></li>
                                        </ul>
                                    </li>
                                    @endcan
                                    @can('haveaccess', 'roles.index')
                                    <li><a data-toggle="collapse" data-target="#Chartsmob" href="{{ route('roles.index')}}">Roles <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="Chartsmob" class="collapse dropdown-header-top">
                                            @endcan
                                            @can('haveaccess', 'roles.index')
                                            <li><a title="Todos los roles" href="{{ route('roles.index')}}"><span class="mini-sub-pro">Todos los Roles</span></a></li>
                                            @endcan
                                            @can('haveaccess', 'roles.create')
                                            <li><a title="Crear Rol" href="{{ route('roles.create')}}"><span class="mini-sub-pro">Crear Role</span></a></li>
                                        </ul>
                                    </li>
                                    @endcan
                                    @can('haveaccess', 'materias.index')
                                    <li><a data-toggle="collapse" data-target="#Tablesmob" href="{{ route('materias.index')}}">Materias <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="Tablesmob" class="collapse dropdown-header-top">
                                            @endcan    
                                            @can('haveaccess', 'materias.index')
                                            <li><a title="Todas las materias" href="{{ route('materias.index')}}"><span class="mini-sub-pro">Todas las materias</span></a></li>
                                            @endcan
                                            @can('haveaccess', 'materias.create')
                                            <li><a title="Crear Materia" href="{{ route('materias.create')}}"><span class="mini-sub-pro">Crear Materia</span></a></li>
                                        </ul>
                                    </li>
                                    @endcan
                                    @can('haveaccess', 'horarios.index')
                                    <li><a data-toggle="collapse" data-target="#formsmob" href="{{ route('horarios.index')}}">Horarios <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="formsmob" class="collapse dropdown-header-top">
                                            @endcan
                                            @can('haveaccess', 'horarios.index')
                                            <li><a title="Todos los horarios" href="{{ route('horarios.index')}}"><span class="mini-sub-pro">Todos los horarios</span></a></li>\
                                            @endcan
                                            @can('haveaccess', 'horarios.create')
                                            <li><a title="Crear Horario" href="{{ route('horarios.create')}}"><span class="mini-sub-pro">Crear Horario</span></a></li>
                                        </ul>
                                    </li>
                                    @endcan
                                    @can('haveaccess', 'periodos.index')
                                    <li><a data-toggle="collapse" data-target="#Appviewsmob" href="{{ route('periodos.index')}}">Periodo<span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                            @endcan    
                                            @can('haveaccess', 'periodos.index')
                                            <li><a title="Todos los periodos" href="{{ route('periodos.index')}}"><span class="mini-sub-pro">Todos los periodos</span></a></li>
                                            @endcan    
                                            @can('haveaccess', 'periodos.create')
                                            <li><a title="Crear Periodo" href="{{ route('periodos.create')}}"><span class="mini-sub-pro">Crear Periodo</span></a></li>
                                        </ul>
                                    </li>
                                    @endcan
                                    @can('haveaccess', 'usuario-rol.index')
                                    <li><a data-toggle="collapse" data-target="#Pagemob" href="{{ route('usuario-rol.index')}}">Cambio de Rol<span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="Pagemob" class="collapse dropdown-header-top">
                                            @endcan
                                            @can('haveaccess', 'usuario-rol.index')
                                            <li><a title="Listado de Evaluaciones" href="{{ route('usuario-rol.index')}}"><span class="mini-sub-pro">Usuarios con rol</span></a></li>
                                        </ul>
                                    </li>
                                    @endcan
                                    <li><a data-toggle="collapse" data-target="#chat" href="{{ route('chat')}}">Chat<span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="chat" class="collapse dropdown-header-top">
                                            <li><a title="Chat" href="{{ route('chat')}}"><span class="mini-sub-pro">Chat</span></a></li>
                                        </ul>
                                    </li>
                                    @can('haveaccess', 'horario-estudiante.index')
                                    <li><a data-toggle="collapse" data-target="#horario1" href="{{ route('horario-estudiante.index')}}">Horario Estudiante<span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    @endcan
                                    @can('haveaccess', 'horario-estudiante.index')
                                        <ul id="horario1" class="collapse dropdown-header-top">
                                            <li><a title="Horario Estudiante" href="{{ route('horario-estudiante.index')}}"><span class="mini-sub-pro">Horario Estudiante </span></a></li>
                                        </ul>
                                    </li>
                                    @endcan
                                    @can('haveaccess', 'horario-profesor.index')
                                    <li><a data-toggle="collapse" data-target="#horario2" href="{{ route('horario-profesor.index')}}">Horario Profesor <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    @endcan
                                        <ul id="horario2" class="collapse dropdown-header-top">
                                            @can('haveaccess', 'horario-profesor.index')
                                            <li><a title="Horario Profesor" href="{{ route('horario-profesor.index')}}"><span class="mini-sub-pro">Horario Profesor </span></a></li>
                                        </ul>
                                    </li>
                                    @endcan
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu end -->
        @yield('content')
</div>
    <!-- jquery
        ============================================ -->
    <script src="{{  asset('js/all.js')}}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>
