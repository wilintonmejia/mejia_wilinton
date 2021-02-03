<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Editorial extends Controller
{
    public function listado(){
        
        $editoriales = Editorial::all();
        return view('inventario.editoriales', ['editoriales' => $editoriales]);
    }
}
