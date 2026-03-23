<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ScratchCard;

class ScratchCardTestSeeder extends Seeder
{
    public function run(): void
    {
        ScratchCard::updateOrCreate([
            'card_number' => 'TEST123456',
        ], [
            'company_id' => 1, // Make sure company_id 1 exists
            'status' => 'unused',
            'amount' => 500,
            'coupon_value' => 500, // Add coupon_value to satisfy not-null constraint
        ]);
    }
}
