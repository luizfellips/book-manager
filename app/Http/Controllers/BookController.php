<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Inertia\Inertia;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        $books = Book::query()->paginate(4);

        return Inertia::render('Books', [
            'books' => $books,
        ]);
    }
}
