<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class History extends Model
{
    use Hasfactory, SoftDeletes;

    /**
     * Use guarded to prevent mass assignment
     * 
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * Get user that owns this history
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the parent historyable of this history
     * 
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function historyable()
    {
        return $this->morphTo();
    }
}
