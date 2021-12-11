<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;
use App\Models\User;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('/book/index', ['books' => $books]);
    }

    public function create()
    {
        return view('book/create');
    }

    public function show($id)
    {
        $book = Book::findorfail($id);
        return view('book/show', ['book' => $book]);
    }

    public function reject()
    {
        return view('book/forbidden');
    }
    public function store()
    {
        $book = new Book();
        $book->name = Request('name');
        $book->post = Request('post');
        $book->user = 'writer';
        $book->save();
        return redirect('/book');
    }
    public function destroy($id)
    {
        $book = Book::findorfail($id);
        $book->delete();
        return redirect('/book');
    }
}
