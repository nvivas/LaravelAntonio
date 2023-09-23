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
Route::get('/mostrarLibros', [LibroController::class, 'verLibro']) ->name('verLibro');
Route::get('/usuarios/{id}/prestamos', [UserController::class, 'showPrestamos'] );
Route::get('/usuarios/prestamos', [UserController::class, 'verPrestamos'])->middleware('auth');
Route::post('usuarios/registrar', [UserController::class, 'registrar']);
Route::post('/solicitarOk/{libro}', [LibroController::class, 'solicitarPrestamo'])->name('solicitar-prestamo');





Route::middleware(['auth'])->group(function () {
    Route::post('/prestamos/crear', 'PrestamoController@crear');
    Route::post('/prestamos/finalizar/{id}', 'PrestamoController@finalizar');
});





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
