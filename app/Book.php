<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Genre;
use App\Author;
use App\File;
use Illuminate\Support\Str;

class Book extends Model
{
    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }

    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }

    public function files()
    {
        return $this->hasMany(File::class);
    }

    public function getShortDescription()
    {
        return Str::words($this->description, '80');
    }

    public function getAuthorsString()
    {
        return implode(', ', $this->authors()->pluck('name')->toArray());
    }

    public function getGenresString()
    {
        return implode(', ', $this->genres()->pluck('name')->toArray());
    }

    protected function getYearAttribute($value)
    {
        preg_match('/\d{4}/', $value, $matches);

        return !empty($matches) ? $matches[0] : $value;
    }

}
