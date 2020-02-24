<div class="list-group">
    @foreach ($genres as $genre)
        <a href="#" class="list-group-item list-group-item-action">{{ $genre->name }}</a>
    @endforeach
</div>
