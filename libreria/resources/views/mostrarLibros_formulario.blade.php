@extends('app')

@section('title', "Formulario añadir libro")

@section('content')
@foreach ($libros as $libro)
    <li> {{ $libro->titulo }}</li>
@endforeach
@endsection
