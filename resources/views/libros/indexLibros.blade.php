<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
    <h1>Listado de libros</h1>
    <table>
        <tr>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Año</th>
            <th>Genero</th>
            <th>Puntaje</th>
            <th>Comentario</th>
        </tr>
        @foreach ($libros as $libro)
        <tr>
            <td>{{$libro->titulo}}</td>
            <td>{{$libro->autor}}</td>
            <td>{{$libro->year}}</td>
            <td>{{$libro->genero}}</td>
            <td>{{$libro->puntaje}}</td>
            <td>{{$libro->comentario}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>