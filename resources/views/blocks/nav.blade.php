<nav class="navbar navbar-light navbar-expand-lg bg-light justify-content-between mb-4">
    <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name') }}</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('contact') }}">Обратная связь</a>
            </li>
        </ul>
        <form class="form-inline" method="get" action="/search">
            <input class="form-control mr-sm-2" type="search" name="q" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            @csrf
        </form>
    </div>
</nav>