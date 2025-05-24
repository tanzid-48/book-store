<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::paginate(15);
        return view('books.index')->with('books', $books);

          $books = Book::all();
    return view('books.index', compact('books'));
    
    }

    public function show($id)
    {
        $book = Book::find($id);
        return view('books.show')->with('book', $book);
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'title' => 'required',
            'author' => 'required',
            'isbn' => 'required|size:13',
            'stock' => 'required|numeric|integer|gte:0',
            'price' => 'required|numeric',
        ];

        $request->validate($rules);

        Book::create($request->all());

        return redirect()->route('books.index');
    }

     public function destroy($id)
    {
        $book = Book::findOrFail($id);
        echo $book;
        $book->delete();

        return redirect()->route('books.index')->with('success', 'Book deleted successfully.');
    }






public function edit($id)
{
    $book = Book::findOrFail($id);    
    return view('books.edit')->with('book', $book);
}

public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'author' => 'required|string|max:255',
        'isbn' => 'required|string|max:13',
        'price' => 'required|numeric',
        'stock' => 'required|integer',
    ]);

    $book = Book::findOrFail($id);
    $book->update($request->all());

    return redirect()->route('books.index')->with('success', 'Book updated successfully!');
}

 
}
