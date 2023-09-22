@extends('app')

@section('title', "Formulario añadir libro")

@section('content')

<table>
    <thead>
        <tr>
            <th> Titulo </th>
            <th> Autor </th>
            <th> Año </th>
            <th> Género </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($libros as $libro)
        <tr>
            <td>{{ $libro->titulo  }}</td>
            <td>{{ $libro->autor  }}</td>
            <td>{{ $libro->ano_publicacion  }}</td>
            <td>{{ $libro->genero }}</td>
        </tr>
        {{-- <li> {{ $libro->titulo }}</li> --}}

        @endforeach
    </tbody>
</table>
@endsection
