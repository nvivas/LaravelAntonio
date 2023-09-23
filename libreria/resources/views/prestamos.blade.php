<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- resources/views/usuarios/prestamos.blade.php -->
    <h1>Préstamos de {{ $user->nombre }}</h1>

    @foreach ($prestamos as $prestamo)
        <p>Préstamo ID: {{ $prestamo->id }}</p>
    @endforeach

</body>
</html>




