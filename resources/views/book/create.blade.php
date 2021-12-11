@extends('layouts.app')

@section('content')
<h1 class="text-4xl mb-4">Create New Post</h1>

<form action="/book" method="post">
    @csrf
    <div class="mb-2">
        <label for="name">Name</label>
        <div>
            <input type="text" name="name" id="name" class="border-2 mt-2">
        </div>
    </div>
    <div>
        <label for="post">Content</label>
        <div>
            <textarea name="post" id="post" cols="30" rows="10" class="border-2 mt-2"></textarea>
        </div>
    </div>
    <div>
        <input type="submit" value="Submit" class="mt-4 text-blue-700 border-2 rounded-md py-1 px-2" > 
    </div>
</form>
@endsection-+