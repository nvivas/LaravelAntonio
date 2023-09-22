@extends('app')

@section('title', "Formulario añadir libro")

@section('content')
    <h1>{{ $titulo }}</h1>
    <form action="{{ route('addLibro')}}" method="POST">
        @csrf

        <label for="">Título:</label>
        <input type="text" name="titulo">

        <label for="">Autor:</label>
        <input type="text" name="autor">

        <label for="">Año de publicación:</label>
        <input type="number" name="ano_publicacion">

        <label for="">Género</label>
        <input type="text" name="genero">

        <label for="">Disponible:</label>
        <input type="checkbox" name="disponible" checked>

        <input type="submit" value="Enviar datos">
    </form>
@endsection
