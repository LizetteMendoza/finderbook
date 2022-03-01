<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola', function () {
    return 'hola';
});

//Route::get('/libros', [BookController::class,'index']);

//Route::get('/libros/create', [BookController::class,'create']);

//Route::post('/tareas/store',[BookController::class,'store']);

Route::resource('/libros', BookController::class);