<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieProducer extends Model
{
    use HasFactory;

    /**
     * Use guarded to prevent mass assignment
     * 
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * Producer can have many movies
     * 
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function movies()
    {
        return $this->hasMany(Movie::class);
    }
}
