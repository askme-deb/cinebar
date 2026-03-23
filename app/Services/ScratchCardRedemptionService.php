<?php

namespace App\Services;

use App\Models\ScratchCard;
use App\Models\ScratchCardRedemption;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ScratchCardRedemptionService
{
    public function redeem(array $data): array
    {
        $validator = Validator::make($data, [
            'card_number' => 'required|string',
            'name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'mobile' => 'required|digits_between:8,15',
        ]);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        return DB::transaction(function () use ($data) {

            $card = ScratchCard::where('card_number', $data['card_number'])->first();

            if (!$card) {
                return ['success' => false, 'message' => 'Invalid scratch card number'];
            }

            if ($card->status !== 'unused') {
                return ['success' => false, 'message' => 'Card already used or expired'];
            }

            if (!$card->company || $card->company->status !== 'active') {
                return ['success' => false, 'message' => 'Invalid company'];
            }

            // Prevent duplicate by mobile
            $alreadyRedeemed = ScratchCardRedemption::where('mobile', $data['mobile'])
                ->where('scratch_card_id', $card->id)
                ->exists();

            if ($alreadyRedeemed) {
                return ['success' => false, 'message' => 'You have already redeemed this card'];
            }

            // Create redemption
            $redemption = ScratchCardRedemption::create([
                'scratch_card_id' => $card->id,
                'name' => $data['name'],
                'email' => $data['email'] ?? null,
                'mobile' => $data['mobile'],
                'redeemed_at' => Carbon::now(),
            ]);

            // Update card
            $card->update([
                'status' => 'used',
                'used_at' => Carbon::now(),
            ]);

            return [
                'success' => true,
                'message' => 'Redemption successful',
                'data' => $redemption
            ];
        });
    }
}
