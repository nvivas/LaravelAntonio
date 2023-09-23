<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Préstamos</title>
</head>
<body>
    <h1>Mis Préstamos</h1>

    <p>Nombre de Usuario: {{ $user->nombre }}</p>

    <h2>Préstamos:</h2>
    <ul>
        @foreach ($prestamos as $prestamo)
            <li>{{ $prestamo->titulo }}</li>
        @endforeach
    </ul>

</body>
</html>


