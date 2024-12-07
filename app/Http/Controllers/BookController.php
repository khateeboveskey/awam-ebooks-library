<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('authors')->get();
        return view(Auth::user()->is_admin == 1 ? 'admin.books.index' : 'books.index', compact('books'));
    }

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    public function create()
    {
        $authors = Author::with('books')->get();
        return view('books.create', compact('authors'));
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
