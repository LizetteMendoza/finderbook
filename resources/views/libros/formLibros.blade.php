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
    
    <form action="/libros" method="POST">
        @csrf
        <label for="titulo">Titulo</label><br>
        <input type="text" name="titulo" value="{{old('titulo')}}"><br>
        @error('titulo')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror <br>
        <label for="autor">Autor</label><br>
        <input type="text" name="autor" value="{{old('autor')}}"><br>
        @error('autor')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror <br>
        <label for="genero">Genero</label><br>
        <select name="genero" id="genero"><br>
            <option value="Novela">Novela</option>
            <option value="Academico">Académico</option>
            <option value="Ficcion">Ficción</option>
            <option value="Fantasia">Fantasia</option>
            <option value="Historia">Historico</option>
            <option value="Filosofia">Filosofia</option>
        </select><br>
        <label for="year">Año</label><br>
        <input type="text" name="year" value="{{old('year')}}"><br>
        @error('year')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <label for="puntaje">Puntaje</label><br>
        <select name="puntaje" id="genero"><br>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select><br>
        <label for="comentario">Comentario</label><br>
        <textarea name="comentario" id="comentario" cols="30" rows="10">{{old('comentario')}}</textarea><br>
        @error('comentario')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>