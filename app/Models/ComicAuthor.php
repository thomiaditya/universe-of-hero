<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ComicAuthor extends Model
{
    use Hasfactory, SoftDeletes;

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
