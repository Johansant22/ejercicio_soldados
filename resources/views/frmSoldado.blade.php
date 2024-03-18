<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soldado</title>
</head>
<body>
    <h1>Formulario de soldados</h1>
    <form action="{{route('store.Soldado')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" placeholder="nombres" name="nombres">
        <input type="text" placeholder="apellidos" name="apellidos">
        <input type="text" placeholder="grado" name="grado">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
