<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $recentBooks = Book::orderBy('created_at', 'desc')->take(4)->get();
        $recentAuthors = Author::orderBy('created_at', 'desc')->take(4)->get();

        return view('home', compact('recentBooks', 'recentAuthors'));
    }
}
