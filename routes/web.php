<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\General;
use app\Http\Controllers\Libros;
use App\Http\Controllers\Editorial;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Inicio
Route::get('/', [General::class, 'inicio']); 

//Libros
Route::get('libros', [Libros::class, 'listado'] )->name('listadoLibros');

Route::get('libros/registro', [Libros::class , 'formulario'])->name('registroLibros');

Route::post('listados/registro', [Libros::class, 'registrar']);

Route::get('libros/actualizar/{id}', [Libros::class, 'formulario_actualizar']);

Route::post('libross/actualizar/{id}', [Libros::class, 'actualizar']);

Route::get('libross/detalle/{id}', [Libros::class, 'detalle']);

//Editoriales
Route::get('editorial', [Editorial::class, 'listado'] )->name('listadoEditoriales');
