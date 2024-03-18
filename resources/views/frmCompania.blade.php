<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Compañia</title>
</head>
<body>
    <h1>Formulario Compañía</h1>
    <form action={{route('Compania.store')}} method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" placeholder="Actividad principal" name="actividad_principal">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
