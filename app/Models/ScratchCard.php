<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScratchCard extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'card_number',
        'coupon_value',
        'status',
        'used_at',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    public function redemption()
    {
        return $this->hasOne(ScratchCardRedemption::class);
    }
}
