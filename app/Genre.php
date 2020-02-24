<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Book;

class Genre extends Model
{
    protected $table = 'tblGenres';

    protected $primaryKey = 'id_genre';

    public function books()
    {
        $this->belongsToMany(Book::class, 'tblBookGenre',
            'id_book', 'id_genre');
    }

    public function scopeMain($query)
    {
        return $query->where('main_genre', 1);
    }
}
