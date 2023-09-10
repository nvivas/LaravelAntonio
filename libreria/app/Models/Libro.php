<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Http\Request;


class Libro extends Model
{
    use HasFactory;

    /*
    public function create(Request $request) {
        $libro = new Libro();
        // Se puede poner así también, asociandolo al html
        // $libro -> titulo = $request->input('titulo');

        // La manera correcta de ponerlo es esta, pero la anterior también estaría bien
        $libro -> titulo = $request -> titulo;
        $libro -> autor = $request -> autor;
        $libro -> ano_publicacion = $request -> ano_publicacion;
        $libro -> genero = $request -> genero;
        $libro -> disponible = $request -> disponible;

        // save
        $libro ->save();
    }
    */

    public static function create($titulo, $autor, $ano_publicacion, $genero, $disponible)
    {
        $libro = new Libro();

        $libro->titulo = $titulo;
        $libro->autor = $autor;
        $libro->ano_publicacion = $ano_publicacion;
        $libro->genero = $genero;
        $libro->disponible = $disponible;

        // save
        $libro->save();
    }

    public static function updated($id) {
        $libro = Libro::find($id);
        $libro->titulo = "El libro negro de la horas";
        $libro->save();
    }

    public static function destroy($ids)
    {
        $libro = Libro::find($ids);
        $libro->delete();
    }





}
