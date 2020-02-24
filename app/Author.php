<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Book;

class Author extends Model
{
    protected $table = 'tblAuthors';

    protected $primaryKey = 'id_author';

    public function books()
    {
        $this->belongsToMany(Book::class, 'tblBookAuthor',
            'id_book', 'id_author');
    }
}
