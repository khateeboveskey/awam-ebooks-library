<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
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
        $authors = Author::all();
        $categories = Category::all();
        return view('admin.books.create', compact(['authors', 'categories']));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'year_published' => 'required|integer|max:' . date('Y'),
            'author_id' => 'required|exists:authors,id',
            'category_id' => 'required|exists:categories,id'
        ]);

        $book = Book::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'year_published' => $validated['year_published'],
            'category_id' => $validated['category_id']
        ]);

        // for pivot table
        $book->authors()->attach($validated['author_id']);

        return view('books.show', compact('book'));
    }
}
