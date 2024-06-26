<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'release_date', 'duration', 'synopsis', 'genre_id', 'poster_url' ,'movie_url'];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
