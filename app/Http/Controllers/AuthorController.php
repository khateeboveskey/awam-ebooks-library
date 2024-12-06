<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return view('authors.index', compact('authors'));
    }
    public function show($slug)
    {
        $author = Author::where('slug', $slug)->firstOrFail();
        return view('authors.show', compact('author'));
    }
}