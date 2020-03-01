<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Genre;

class BooksController extends Controller
{

    public function list()
    {
        $books = Book::orderBy('year', 'DESC')->paginate(10);

        return view('books.list', compact('books'));
    }

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

}
