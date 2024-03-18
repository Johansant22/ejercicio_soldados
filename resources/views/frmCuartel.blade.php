<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cuartel</title>
</head>
<body>
    <h1>Formulario Cuartel</h1>
    <form action="{{route('store.Cuartel')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" placeholder="Nombre" name="nombre">
        <input type="text" placeholder="Ubicacion" name="ubicacion">
        <button type="submit">Enviar</button>

    </form>
</body>
</html>
