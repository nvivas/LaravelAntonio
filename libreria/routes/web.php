<?php

use App\Http\Controllers\LibroController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/addLibro', [LibroController::class, 'addLibro']);
Route::get('/modificarLibro', [LibroController::class, 'updateLibro']);
Route::get('/eliminarLibro', [LibroController::class, 'deleteLibro']);
Route::get('/mostrarFormulario', [LibroController::class, 'showFormularioAddLibro']);
Route::post('/mostrarFormulario', [LibroController::class, 'showFormularioAddLibro']);
