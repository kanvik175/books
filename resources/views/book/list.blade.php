@extends('layouts.main')

@section('title', 'Список книг')

@section('content')

    @foreach($books as $book)

        <div class="row list-item mb-5">
            <div class="col-3">
                <a href="/book/{{ $book->id }}"><img class="list-item__img" src="{{ asset('img/' . $book->img) }}"></a>
            </div>
            <div class="col-9">
                <a href="/book/{{ $book->id }}"><div class="list-item__title pb-1">{{ $book->title }}</div></a>
                <div class="list-item__author pb-1">By:
                    {{ $book->getAuthorsString() }}
                </div>
                <div class="list-item__description">{{ $book->getShortDescription() }}</div>
            </div>
        </div>

    @endforeach

    {{ $books->links() }}

@endsection
