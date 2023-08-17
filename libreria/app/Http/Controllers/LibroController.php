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
}
