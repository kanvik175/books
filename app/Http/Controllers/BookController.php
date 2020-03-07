<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;
use App\Genre;

class BookController extends Controller
{

    public function list()
    {
        $books = Book::orderBy('year', 'DESC')->paginate(10);

        return view('book.list', compact('books'));
    }

    public function show(Book $book)
    {
        return view('book.show', compact('book'));
    }

    public function search()
    {
        $searchString = request('q');
        $books =  Book::where('title', 'LIKE', "%{$searchString}%")->paginate(10)->appends(['q' => $searchString]);

        return view('book.list', compact('books'));
    }

}
