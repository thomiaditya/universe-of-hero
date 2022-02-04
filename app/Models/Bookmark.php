<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    use HasFactory;

    /**
     * Use guarded to prevent mass assignment
     * 
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * Get the parent bookmarkable of this bookmark
     * 
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function bookmarkable()
    {
        return $this->morphTo();
    }

    /**
     * Get user that owns this bookmark
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
