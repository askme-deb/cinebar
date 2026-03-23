<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'phone',
        'address',
        'website',
        'description',
        'logo_path',
        'gst',
        'pan',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
        public function scratchCards()
        {
            return $this->hasMany(ScratchCard::class, 'company_id');
        }

        public function scratchCardRedemptions()
        {
            return $this->hasMany(ScratchCardRedemption::class, 'company_id');
        }

    }
