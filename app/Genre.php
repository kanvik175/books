<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Book;

class Genre extends Model
{
    public function books()
    {
        $this->belongsToMany(Book::class);
    }

    public function scopeMain($query)
    {
        return $query->where('main_genre', 1);
    }
}
