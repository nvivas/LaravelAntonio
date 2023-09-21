<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Http\Request;


class Libro extends Model
{
    use HasFactory;

public static function create(Request $request)
    {
        $libro = new Libro();
        $libro->titulo = $request->input('titulo');
        $libro->autor = $request->input('autor');
        $libro->genero = $request->input('genero');
        $libro->disponible = $request->input('disponible');
        $libro->ano_publicacion = $request->input('ano_publicacion');
        $libro->save();
    }

    public static function uptatedID($id, Request $request)
    {
        $libro = Libro::find($id);
        $libro->titulo = $request->input('titulo');
        $libro->autor = $request->input('autor');
        $libro->genero = $request->input('genero');
        $libro->disponible = $request->input('disponible');
        $libro->ano_publicacion = $request->input('ano_publicacion');
        $libro->save();
    }

    public static function destroy($ids)
    {
        $libro = Libro::find($ids);
        $libro->delete();
    }





}
