<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Book;

class AuthorBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors = Author::all();
        $books = Book::all();

        foreach ($books as $index => $book) {
            if (isset($authors[$index])) {
                $book->authors()->attach($authors[$index]->id);
            }
        }
    }
}
