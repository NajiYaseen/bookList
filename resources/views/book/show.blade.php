@extends('layouts.app')

@section('content')
<h1 class="text-4xl mb-8">Book Details</h1>
<h3 class="text-2xl mb-4">Title: {{ $book->name }}</h3>
  <p class="text-lg ml-4">Content: {{ $book->post }}</p>

  <form action="/book/{{$book->id}}" method="POST">
    @if (auth()->user() && auth()->user()->role == 'admin')
    @csrf
    @method('DELETE')
    <button class="border-2 rounded-md text-red-900 p-2 mt-4">Delete</button>
    @endif
  </form>
  @endsection