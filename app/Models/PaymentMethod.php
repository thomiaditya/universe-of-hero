<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentMethod extends Model
{
    use Hasfactory, SoftDeletes;
    /**
     * Use guarded to prevent mass assignment
     * 
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * Payment method can have many donation logs
     * 
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function donationLogs()
    {
        return $this->hasMany(DonationLog::class);
    }
}
