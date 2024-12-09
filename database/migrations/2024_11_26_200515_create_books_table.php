<?php

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description')->nullable();
            $table->integer('year_published')->nullable();
            $table->string('cover_image')->nullable();
            $table->foreignIdFor(Category::class)->constrained();
            $table->timestamps();
        });

        Schema::create('author_book', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Author::class)->constrained();
            $table->foreignIdFor(Book::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
