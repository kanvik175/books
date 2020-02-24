<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Genre;
use App\Author;
use Illuminate\Support\Str;

class Book extends Model
{

    protected $table = 'tblBooks';

    protected $primaryKey = 'id_book';

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'tblBookGenre',
            'id_genre', 'id_book');
    }

    public function authors()
    {
        return $this->belongsToMany(Author::class, 'tblBookAuthor',
            'id_author', 'id_book');
    }

    public function short_description()
    {
        return Str::words($this->description, '80');
    }

}
