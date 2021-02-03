<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Carga de archivos css-->
        
        <link href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"> 
        <link href="{{ url('/assets/bootstrap/css/style.css') }}" rel="stylesheet"> 
        <link href="{{ url('/assets/bootstrap/css/mdb.min.css') }}" rel="stylesheet"> 
        
        <title>Libreria Nacional</title>

    </head>
    <body  >
        <!--Barra de navegación css-->
        @include('navbar')
        <br>
        <div class="container" >
            @yield('content')
        </div>
        @include('footer')
        <!--Carga de archivos javascript-->
        <script type="text/javascript" src="{{ url('/assets/bootstrap/js/jquery.min.js') }}"></script> 
        <script type="text/javascript" src="{{ url('/assets/bootstrap/js/popper.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('/assets/bootstrap/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('/assets/bootstrap/js/mdb.min.js') }}"></script>
    </body>
</html>
