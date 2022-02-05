<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServerLog extends Model
{
    use Hasfactory, SoftDeletes;

    /**
     * Use guarded to prevent mass assignment
     * 
     * @var array<int, string>
     */
    protected $guarded = [];
}
