@extends('principal')
@section('content')
<h1 class="titulo ">  Actualizar Libros</h1>
        <form class="letra" style="background-color: #66bb6a;" action='{{url(""libros/actualizar/$libro->id"")}}' method= "POST">
            @csrf
            <label for="ISBN">ISBN </label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">&#9020;</span>
                </div>
                <input type="text" id="ISBN" name="ISBN"  class="form-control" placeholder="ISBN" value="{{$libro->ISBN}}" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
            </div>

            <label for="titulo">Título </label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">&#9020;</span>
                </div>
                <input type="number" id='titulo' name='titulo' class="form-control" placeholder="Título del Libro" value="{{$libro->titulo}}" required>
            </div>

            <label for="cantidad">Cantidad </label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">&#9020;</span>
                </div>
                <input type="number" id='cantidad' name='cantidad'  class="form-control" placeholder="Cantidad" value="{{$libro->cantidad}}" required>
            </div>

            <label for="precio">Precio </label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">&#9020;</span>
                </div>
                <input type="number" id='precio' name='precio' min='100'  class="form-control" placeholder="Precio" value="{{$libro->precio}}" required>
            </div>

            <label for="productos"> Editorial</label> 
            <select class="custom-select-sm" id="editoriales" name="editoriales" >
                @foreach($editoriales as $c)
                    @if($c->id === $libro->editorial_fk)
                    <option value="{{$c->id}}" selected>{{$c->nombre}}</option>
                        @else
                    <option value="{{$c->id}}">{{$c->nombre}}</option>
                        @endif
                    @endforeach
            </select>
            </br></br</br></br>
            <button type="submit" class="boton_personalizado">Registrar</button>
            <button type="reset" class="boton_personalizado">Limpiar</button>
            <a href='{{url()->previous()}}' role="button" class="boton_personalizado_1">Cancelar</a>
        </form>
        </br>
@stop