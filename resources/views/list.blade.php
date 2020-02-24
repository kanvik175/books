@extends('layouts.main')

@section('content')

    @foreach($books as $book)

        <div class="row list-item mb-5">
            <div class="col-3">
                <img class="list-item__img" src="{{ asset('img/' . $book->img) }}">
            </div>
            <div class="col-9">
                <div class="list-item__title pb-1">{{ $book->title }}</div>
                <div class="list-item__author pb-1">By:
                    @foreach ($book->authors as $author)
                        {{ $author->name . ($loop->last ? '' : ', ') }}
                    @endforeach
                </div>
                <div class="list-item__description">{{ $book->short_description() }}</div>
            </div>
        </div>

    @endforeach

    {{ $books->links() }}

@endsection

@section('title', 'Список книг')
