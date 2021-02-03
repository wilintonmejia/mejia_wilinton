@extends('principal')
@section('content')
@if(count($productos)===0)
    </br></br></br>
    <h1 class="titulo"> No hay libros registrados </h1>
    </br></br>
    <div align="left"><a class="consultar" href='{{url("libros/registro")->'> Registrar </a></div>
    </br></br></br></br></br></br></br></br></br></br></br>
@else
<h1 class="titulo"> Listado de Libros </h1>
    </br></br>
    <div align="left"><a class="consultar" href='{{url("libros/registro")->'> Registrar </a></div>
    </br>
    <div class="table-responsive-xl">
    <table class="table table-hover table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ISBN</th>
                <th scope="col">Titulo</th>
                <th scope="col">Stock</th>
                th scope="col">Estado</th>
                <th scope="col">Editorial</th>
                <th scope="col">Precio</th>
                <th scope="col">Descuento</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($libros as $b)
                <tr>
                    <td>{{ $b->id}}</td>
                    <td>{{ $b->ISBN}}</td>
                    <td>{{ $b->titulo}}</td>
                    <td>{{ $b->stock}}</td>
                    <td>{{ $b->estado()}}</td>
                    <td>{{ $b->editorial->nombre}}</td>
                    <td>{{ $b->precio}}</td>
                    
                    <td>{{ $b->descuento()}}</td>
                    <td><a href='{{url("libros/actualizar/{$b->id}")}}' class="boton_4"> ACTUALIZAR </a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endif   
@stop