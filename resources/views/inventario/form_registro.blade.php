@extends('principal')
@section('content')
<h1 class="titulo "> Registro de Productos</h1>
        <form class="letra" style="background-color: #66bb6a;" action='{{url("libros/registro")}}' method= "POST">
            @csrf
            <label for="ISBN">ISBN </label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">&#9020;</span>
                </div>
                <input type="text" id="ISBN" name="ISBN"  class="form-control" placeholder="ISBN" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
            </div>

            <label for="titulo">Título </label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">&#9020;</span>
                </div>
                <input type="text" id='titulo' name='titulo' class="form-control" placeholder="Título del Libro" required>
            </div>

            <label for="stock">Cantidad </label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">&#9020;</span>
                </div>
                <input type="number" id='stock' name='stock'  class="form-control" placeholder="Cantidad" required>
            </div>

            <label for="precio">Precio </label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">&#9020;</span>
                </div>
                <input type="number" id='precio' name='precio' min='100'  class="form-control" placeholder="Precio" required>
            </div>

            <label for="productos"> Editorial</label> 
            <select class="custom-select-sm" id="editoriales" name="editoriales" >
                @foreach($editoriales as $c)
                    <option value="{{$c->id}}">{{$c->nombre}}</option>
                @endforeach
            </select>
            </br></br</br></br>
            <button type="submit" class="boton_personalizado">Registrar</button>
            <button type="reset" class="boton_personalizado">Limpiar</button>
            <a href='{{url()->previous()}}' role="button" class="boton_personalizado_1">Cancelar</a>
        </form>
        </br>
@stop