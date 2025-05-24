@extends('layout')


@section('page-content')
 
<p class="text-end">
    <a class="btn btn-primary"href="{{route('books.create')}}">New Book</a>
</p> 

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <table  class="table table-striped table-brodered">
   
 <tr>
        <th>ID</th>
        <th>Title</th>
        <th>AUTHER</th>
        <th> Details </th>
       
    </tr>
     @foreach($books as $book)
    <tr>
        <td>{{$book->id}}</td>
        <td>{{$book->title}}</td>
        <td>{{$book->author}}</td>
        <td class="d-flex gap-2">
    <a href="{{ route('books.show', $book->id) }}" class="btn btn-info btn-sm">Details</a>

    
   <a href="{{ route('books.edit', $book->id) }}" class="btn btn-primary btn-sm">Edit</a>


    <form action="{{ route('books.destroy', $book->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
    </form>
</td>

    </tr>
    
    
  @endforeach
   </table>
   {{$books->Links()}}
   @endsection

