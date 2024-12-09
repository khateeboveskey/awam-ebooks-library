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
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'author_id' => 'required|exists:authors,id',
            'category_id' => 'required|exists:categories,id'
        ]);

        $book = Book::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'year_published' => $validated['year_published'],
            'category_id' => $validated['category_id']
        ]);

        $book->cover_image = $request->file('cover_image')->store('books', 'public');
        $book->save();

        // for pivot table
        $book->authors()->attach($validated['author_id']);

        return redirect()->route('books.show', $book)->with('success', 'تم إضافة الكتاب بنجاح');
    }

    public function destroy(Book $book) {
        $book->delete();
        return redirect()->route('admin.books.index')->with('success', 'تم حذف الكتاب بنجاح');
    }
}
