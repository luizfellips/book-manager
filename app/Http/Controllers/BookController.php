<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Inertia\Inertia;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        $books = Book::query()->paginate(4);
        $route = route('books.index');

        return Inertia::render('Books', [
            'books' => $books,
            'route' => $route,
        ]);
    }

    public function show(Book $book) {
        $books = Book::query()->paginate(4);

        return Inertia::render('ShowBook', [
            'book' => $book,
        ]);
    }
}
