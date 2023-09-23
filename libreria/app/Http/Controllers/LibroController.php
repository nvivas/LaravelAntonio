<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibroController extends Controller
{

    public function updateLibro() {
        Libro::updated(1);
    }

    public function deleteLibro()
    {
        Libro::destroy(1);
    }

    public function showFormularioAddLibro() {
        $titulo = 'Añadir Libro';
        return view("addLibro_formulario", compact('titulo'));
    }

    public function addLibroFormulario(Request $request) {
        $id_libro = Libro::create($request);
        return view('addLibroOk_Formulario', ['id' => $id_libro] );
    }
    public function verLibro() {
        $libro = Libro::allLibros();
        return view('mostrarLibros_formulario') -> with('libros', $libro);
    }

    public function solicitarPrestamo($libroId)
    {
        return redirect('/solicitarOk')->with('success', 'Solicitud de préstamo enviada.');
    }

}
