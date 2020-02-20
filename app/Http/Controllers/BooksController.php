<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BooksController extends Controller
{

    public function index()
    {
        $books = Book::where('year', '2020')->take(5)->get();

        return view('index', compact('books'));
    }

}
