<?php

use App\Http\Controllers\LibroController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrestamoController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/addLibro', [LibroController::class, 'addLibro']);
Route::get('/modificarLibro', [LibroController::class, 'updateLibro']);
Route::get('/eliminarLibro', [LibroController::class, 'deleteLibro']);
Route::get('/mostrarFormulario', [LibroController::class, 'showFormularioAddLibro']);

Route::post('/addLibro', [LibroController::class, 'addLibroFormulario']) ->name('addLibro');

