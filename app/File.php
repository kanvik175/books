<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Book;

class File extends Model
{
    public function getFormatAttribute($value)
    {
        return strtoupper($value);
    }

    public function books()
    {
        return $this->belongsTo(Book::class);
    }
}
