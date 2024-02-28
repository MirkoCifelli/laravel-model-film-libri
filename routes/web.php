<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\BookController;
use App\Http\Controllers\Guest\MovieController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');
