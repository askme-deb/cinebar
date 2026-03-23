<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ScratchCard;

class ScratchCardTestSeeder extends Seeder
{
    public function run(): void
    {
        $company = \App\Models\Company::where('email', 'company@example.com')->first();
        if (!$company) {
            throw new \Exception('Test company not found. Please seed the company first.');
        }
        ScratchCard::updateOrCreate([
            'card_number' => 'TEST123456',
        ], [
            'company_id' => $company->id,
            'status' => 'unused',
            'amount' => 500,
            'coupon_value' => 500, // Add coupon_value to satisfy not-null constraint
        ]);
    }
}
