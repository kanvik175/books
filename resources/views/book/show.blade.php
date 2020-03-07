@extends('layouts.main')

@section('title')
    {{ $book->title  }}
@endsection

@section('content')
    <div class="book">
        <h2 class="book__title mb-4">{{ $book->title }}</h2>
        <div class="row mb-4">
            <div class="col-4">
                <img class="book__img" src="{{ asset('img/' . $book->img) }}">
            </div>
            <div class="col-8">
                <table class="book__property-list mt-3">
                    <tr>
                        <th>Author:</th>
                        <td>{{ $book->getAuthorsString() }}</td>
                    </tr>
                    <tr>
                        <th>ISBN:</th>
                        <td>{{ $book->isbn }}</td>
                    </tr>
                    <tr>
                        <th>Pages:</th>
                        <td>{{ $book->pages }}</td>
                    </tr>
                    <tr>
                        <th>Year:</th>
                        <td>{{ $book->year }}</td>
                    </tr>
                    <tr>
                        <th>Language:</th>
                        <td>{{ $book->lang }}</td>
                    </tr>
                    <tr>
                        <th>Genres:</th>
                        <td>{{ $book->getGenresString() }}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="book__description">
                    <h4>Book Description:</h4>
                    <p>{{ $book->description }}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @foreach($book->files as $file)
                    <a href="{{ asset('file/allitbooks_project/books/' . $file->name) }}" class="btn btn-primary">Download {{ $file->format }} {{ $file->size }}</a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
