<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScratchCardRedemption extends Model
{
    use HasFactory;


    protected $fillable = [
        'scratch_card_id',
        'name',
        'email',
        'mobile',
        'redeemed_at',
    ];

    public function scratchCard()
    {
        return $this->belongsTo(ScratchCard::class);
    }

    // Get company via scratchCard relationship
}