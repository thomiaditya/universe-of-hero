<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComicAuthor extends Model
{
    use HasFactory;

    /**
     * Use guarded to prevent mass assignment
     * 
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * Get comics associated with this author
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function comics()
    {
        return $this->belongsToMany(Comic::class, 'comic_author_comic');
    }
}
