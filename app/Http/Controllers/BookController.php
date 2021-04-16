<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index() {

        $books = Book::get();
        $count = 1;

        return view('student.books', [
            'books' => $books,
            'count' => $count,
        ]);
    }
}
