@extends('layouts.app')

@section('content')

<div class="wrapper pizza-index">
  <h1 class="text-4xl">Users List</h1>
  @foreach($users as $user)
  <div>
    <div class="border-2 my-6 py-3 px-3">
      <h3 class="text-2xl mb-2 text-blue-400">
       {{ $user->name }}
      </h3>
      <p>{{$user->role}}</p>
    </div>
  </div>

  @endforeach
</div>
@endsection