<?php
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

 /* Route::get('/', function () {
    return view('welcome');
 }); */


 
  Route::get('/',[BookController::class,'index'] )->name('books.index');
  Route::get('/books/{id}/show',[BookController::class,'show'])->name('books.show');
  Route::get('/books/create',[BookController::class,'create'])->name('books.create');
  Route::post('/books',[BookController::class,'store'])->name('books.store');
Route::delete('/books/{id}', [BookController::class, 'destroy'])->name('books.destroy');
Route::get('/books', [BookController::class, 'index'])->name('books.index');

// View list of books
Route::get('/books', [BookController::class, 'index'])->name('books.index');

// Show edit form
Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');

// Update book
Route::put('/books/{id}', [BookController::class, 'update'])->name('books.update');


