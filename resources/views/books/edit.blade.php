<!-- resources/views/books/edit.blade.php -->

@extends('layout')

@section('page-content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl mb-4">Edit Book</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('books.update', $book->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input
                type="text"
                name="title"
                id="title"
                value="{{ old('title', $book->title) }}"
                class="form-control"
            >
        </div>

        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input
                type="text"
                name="author"
                id="author"
                value="{{ old('author', $book->author) }}"
                class="form-control"
            >
        </div>

        <div class="mb-3">
            <label for="isbn" class="form-label">ISBN</label>
            <input
                type="text"
                name="isbn"
                id="isbn"
                value="{{ old('isbn', $book->isbn) }}"
                class="form-control"
            >
        </div>

        <div class="mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input
                type="number"
                name="stock"
                id="stock"
                min="0"
                value="{{ old('stock', $book->stock) }}"
                class="form-control"
            >
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input
                type="text"
                name="price"
                id="price"
                value="{{ old('price', $book->price) }}"
                class="form-control"
            >
        </div>

        <div class="d-flex align-items-center">
            <button type="submit" class="btn btn-primary">
                Update Book
            </button>
            <a href="{{ route('books.index') }}" class="btn btn-secondary ms-3">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection
