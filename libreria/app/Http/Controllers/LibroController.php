<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibroController extends Controller
{
    public function addLibro() {
        $titulo = "El silencio de la ciudad blanca";
        $autor = "Eva García Sáenz de Urturi";
        $ano_publicacion = 2016;
        $genero = "Suspense";
        $disponible = true;

        Libro::create($titulo, $autor, $ano_publicacion, $genero, $disponible);
    }

    public function updateLibro() {
        Libro::updated(1);
    }

    public function deleteLibro()
    {
        Libro::destroy(1);
    }

    public function showFormularioAddLibro() {
        return view("addLibro_formulario");
    }

    // me he quedado en el minuto 19:19

}
