@extends('principal')
@section('content')

<h1 class="titulo"> Listado de Editoriales </h1>
    <div class="table-responsive-xl">
    <table class="table table-hover table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Dirección</th>
                <th scope="col">Ciudad</th>
                <th scope="col">Teléfono</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($editoriales as $e)
                <tr>
                    <td>{{ $e->id}}</td>
                    <td>{{ $e->nombre}}</td>
                    <td>{{ $e->direccion}}</td>
                    <td>{{ $e->ciudad}}</td>
                    <td>{{ $e->telefono}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endif   
@stop