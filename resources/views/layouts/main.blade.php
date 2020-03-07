<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>@yield('title', 'Библиотека')</title>
</head>
<div id="app">

    <div class="container">

    @include('blocks.nav')

        <div class="row">
            <div class="col-3">
                @include('blocks.sidebar')
            </div>
            <div class="col-9">
                @yield('content')
            </div>
        </div>

    @include('blocks.footer')

    </div>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
