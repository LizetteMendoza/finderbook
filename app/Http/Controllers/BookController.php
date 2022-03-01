<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('/libros.indexLibros', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/libros.formLibros');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'titulo'=> 'required',
            'autor'=> 'required',
            'year'=> 'required',
            'genero'=> 'required',
            'puntaje'=> 'required'
        ]);

        $libro = new Book();
        $libro->titulo = $request->titulo;
        $libro->autor = $request->autor;
        $libro->year = $request->year;
        $libro->genero = $request->genero;
        $libro->puntaje = $request->puntaje;
        $libro->comentario = $request->comentario;

        $libro->save();

        return redirect('/libros');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $book = Book::find($id);
        return view('libros.showLibro', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('/libros.formLibros', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'titulo'=> 'required',
            'autor'=> 'required',
            'year'=> 'required',
            'genero'=> 'required',
            'puntaje'=> 'required'
        ]);
        
        $book->titulo = $request->titulo;
        $book->autor = $request->autor;
        $book->year = $request->year;
        $book->genero = $request->genero;
        $book->puntaje = $request->puntaje;
        $book->comentario = $request->comentario;

        $book->save();

        return redirect('/libros');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}
