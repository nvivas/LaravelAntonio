<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
</head>
<body>
    <h1>{{ $titulo }}</h1>
    <form action="{{ route('usuario/registrar')}}" method="POST">
        @csrf

        <label for="">Nombre</label>
        <input type="text" name="name">

        <label for="">Correo</label>
        <input type="email" name="email">

        <label for="">Contraseña</label>
        <input type="password" name="password">

        <input type="submit" value="Enviar datos">
    </form>

</body>
</html>
