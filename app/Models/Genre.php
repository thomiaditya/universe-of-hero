<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    /**
     * Use guarded to prevent mass assignment
     * 
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * Movie can have many genres
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function movies()
    {
        return $this->belongsToMany(Movie::class, 'movie_genre');
    }

    /**
     * Comic can have many genres
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function comics()
    {
        return $this->belongsToMany(Comic::class, 'comic_genre');
    }
}
