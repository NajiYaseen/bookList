@extends('layouts.app')

@section('content')

<div class="wrapper pizza-index">
  <h1 class="text-4xl">Book List</h1>
  @foreach($books as $book)
  <div>
    <div class="border-2 my-6 py-3 px-3">
      <h3 class="text-2xl mb-2 text-blue-400">
        <a href="/book/{{ $book->id }}">{{ $book->name }}</a>
      </h3>
      <p>{{$book->post}}</p>
    </div>
  </div>

  @endforeach
  <div class=" text-blue-700 p-2 mt-4 w-fit">
    <a href="book/create">Click to add book</a>
  </div>
</div>
@endsection