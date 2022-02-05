<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Director extends Model
{
    use Hasfactory, SoftDeletes;

    /**
     * Use guarded to prevent mass assignment
     * 
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * Director can have many movies
     * 
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function movies()
    {
        return $this->hasMany(Movie::class);
    }
}
