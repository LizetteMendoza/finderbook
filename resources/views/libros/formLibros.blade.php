<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
</head>
<body>
    <h1>Agregar libro</h1>
    <form action="/libros/store" method="POST">
        <label for="titulo">Titulo</label><br>
        <input type="text" name="titulo"><br>
        <label for="autor">Autor</label><br>
        <input type="text" name="autor"><br>
        <label for="genero">Genero</label><br>
        <select name="genero" id="genero"><br>
            <option value="genero">Novela</option>
            <option value="genero">Académico</option>
            <option value="genero">Ficción</option>
            <option value="genero">Fantasia</option>
            <option value="genero">Historico</option>
            <option value="genero">Filosofia</option>
        </select><br>
        <label for="year">Año</label><br>
        <input type="text" name="year"><br>
        <label for="puntaje">Puntaje</label><br>
        <select name="puntaje" id="genero"><br>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select><br>
        <label for="comentario">Comentario</label><br>
        <textarea name="comentario" id="comentario" cols="30" rows="10"></textarea><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>