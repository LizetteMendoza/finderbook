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
    <a href="libros/create">Añadir libro</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Año</th>
            <th>Genero</th>
            <th>Puntaje</th>
            <th>Comentario</th>
            <th>Acciones</th>
        </tr>
        @foreach ($books as $book)
        <tr>
            <td>{{$book->id}}</td>
            <td>{{$book->titulo}}</td>
            <td>{{$book->autor}}</td>
            <td>{{$book->year}}</td>
            <td>{{$book->genero}}</td>
            <td>{{$book->puntaje}}</td>
            <td>{{$book->comentario}}</td>
            <td><a href="libros/{{$book->id}}">Ver Detalle</a></td>
            <td><a href="libros/{{$book->id}}/edit">Editar</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>