@extends('layouts.main')

@section('content')

    @foreach($books as $book)

        <div class="card">
            <div class="card-body">
                <img class="card-img-top" src="{{ url('img/' . $book->img) }}" alt="Card image cap">
                <h5 class="card-title">{{ $book->title  }}</h5>
                <p class="card-text">{{ $book->description  }}}</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

    @endforeach

@endsection
