<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Escuela Virtual - @yield('titulo')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('asset/img/favicon.ico')}}">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{asset('asset/css/font-awesome.min.css')}}"> --}}
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    

</head>

<body>
    @yield('content')
    <!-- jquery
		============================================ -->
    <script src="{{  asset('js/all.js')}}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>


</body>

</html>