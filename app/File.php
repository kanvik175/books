<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Book;

class File extends Model
{
    protected $table = 'tblFiles';

    protected $primaryKey = 'id_file';

    public function getFormatAttribute($value)
    {
        return strtoupper($value);
    }

    public function books()
    {
        return $this->belongsTo(Book::class, 'id_file', 'id_book');
    }
}
