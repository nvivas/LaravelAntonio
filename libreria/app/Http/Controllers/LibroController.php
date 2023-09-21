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

    public function addLibroFormulario(Request $request)
    {
        $id_libro = Libro::create($request);
        return view('addLibroOk_Formulario');
    }
}
