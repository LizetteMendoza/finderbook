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
    
    @isset($book)
        <form action="/libros/{{$book->id}}" method="POST"> {{--Editar--}} 
            @method('PATCH')
    @else
        <form action="/libros" method="POST"> {{--Crear--}}
    @endisset
    
        @csrf
        <label for="titulo">Titulo</label><br>
        <input type="text" name="titulo" value="{{isset($book)?$book->titulo: ''}}{{old('titulo')}}"><br>
        @error('titulo')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror <br>
        <label for="autor">Autor</label><br>
        <input type="text" name="autor" value="{{isset($book)? $book->autor: ''}}{{old('autor')}}"><br>
        @error('autor')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror <br>
        <label for="genero">Genero</label><br>
        <select name="genero" id="genero"><br>
            <option value="Novela"{{isset($book)&& $book->genero=='Novela' ? 'selected': ''}}>Novela</option>
            <option value="Academico"{{isset($book)&& $book->genero=='Academico' ? 'selected': ''}}>Académico</option>
            <option value="Ficcion"{{isset($book)&& $book->genero=='Ficcion' ? 'selected': ''}}>Ficción</option>
            <option value="Fantasia"{{isset($book)&& $book->genero=='Fantasia' ? 'selected': ''}}>Fantasia</option>
            <option value="Historia"{{isset($book)&& $book->genero=='Historia' ? 'selected': ''}}>Historico</option>
            <option value="Filosofia"{{isset($book)&& $book->genero=='Filosofia' ? 'selected': ''}}>Filosofia</option>
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
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
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