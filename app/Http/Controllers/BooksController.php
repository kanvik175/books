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
        $genres = Genre::main()->get();

        return view('list', compact('books', 'genres'));
    }

}
