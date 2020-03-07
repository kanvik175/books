@extends('layouts.main')

@section('title', 'Обратная связь')

@section('content')
    <h2>Обратная связь</h2>

    @if(session()->has('message'))
    <div class="alert alert-success" role="alert">
        {{ session('message') }}
    </div>
    @endif

    <form action='{{ url('contact') }}' method='POST'>
        <div class="form-group">
            <label for="input-name">Ваше имя</label>
            <input type="text" class="form-control" id="input-name" name="name" value='{{ old('name') }}'>
        </div>
        <div class="form-group">
            <label for="input-email">Email для обратной связи</label>
            <input type="email" class="form-control" id="input-email" name="email" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <label for="text-area">Сообщение</label>
            <textarea class="form-control" id="text-area" rows="3" name="message">{{ old('message') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
        @csrf
    </form>
@endsection