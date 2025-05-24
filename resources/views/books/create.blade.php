@extends('layout')

@section('page-content')
<a href="{{ route('books.index') }}"class="btn btn-primary">Back</a>
<legend>New book</legend>

<form method="post" action="{{ route('books.store') }}">
   @csrf

    <div class="mb-2">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" value="{{ old('title') }}">
        <div>{{ $errors->first('title') }}</div>
    </div>

    <div class="mb-2">
        <label for="author" class="form-label">Author</label>
        <input type="text" class="form-control" name="author" value="{{ old('author') }}">
        <div>{{ $errors->first('author') }}</div>
    </div>

    <div class="mb-2">
        <label for="isbn" class="form-label">ISBN</label>
        <input type="text" class="form-control" name="isbn" value="{{ old('isbn') }}">
        <div>{{ $errors->first('isbn') }}</div>
    </div>

    <div class="mb-2">
        <label for="stock" class="form-label">Stock</label>
        <input type="text" class="form-control" name="stock" value="{{ old('stock') }}">
        <div>{{ $errors->first('stock') }}</div>
    </div>

    <div class="mb-2">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control" name="price" value="{{ old('price') }}">
        <div>{{ $errors->first('price') }}</div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
