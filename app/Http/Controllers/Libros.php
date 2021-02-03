<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


class Libros extends Controller
{
    public function listado(){
        
        $libros = Libro::all();
        return view('inventario.libros', ['libros' => $libros]);
    }

    public function formulario_registrar(){
        $editoriales = Editorial::all();
        return view('inventario.form_registro', compact('editoriales'));
    }

    public function registrar(Request $request){
    
            $libro = new Libro();
            $libro->ISBN = $request->input('ISBN');
            $libro->titulo = $request->input('titulo');
            $libro->precio = $request->input('precio');
            $libro->stock = $request->input('stock');
            $libro->editorial_fk = $request->input('editoriales');
            $libro->save();
            return redirect()->route('listadoLibros');
    }

    public function formulario_actualizar($id){
        $libro = Libro::findOrFail($id);
        $editorial = Editorial::all();
        return view('inventario.form_actualiza', compact('libro','editorial'));
    }

    public function actualizar(Request $request, $id){
        $libro = Libro::findOrFail($id);
        $libro->ISBN = $request->input('ISBN');
        $libro->titulo = $request->input('titulo');
        $libro->precio = $request->input('precio');
        $libro->stock = $request->input('stock');
        $libro->editorial_fk = $request->input('editoriales');
        $libro->save();
        return redirect()->route('listadoProductos');
    }

}
