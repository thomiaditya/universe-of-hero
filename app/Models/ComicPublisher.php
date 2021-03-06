<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ComicPublisher extends Model
{
    use Hasfactory, SoftDeletes;

    /**
     * Use guarded to prevent mass assignment
     * 
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * Get comics that this publisher has published
     * 
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function comics()
    {
        return $this->hasMany(Comic::class);
    }
}
