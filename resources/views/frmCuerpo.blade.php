<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cuerpo</title>
</head>
<body>
    <h1>Formulario cuerpo soldado</h1>
    <form action={{route('store.Cuerpo')}} method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" placeholder="Categoria" name="categoria">
        <input type="text" placeholder="Denominacion" name="denominacion">
        <button type="submit">Enviar</button>

    </form>
</body>
</html>
