<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\ScratchCardRedemptionService;
use App\Models\ScratchCard;

class RewardsController extends Controller
{

    public function index()
    {
        return view('rewards.index');
    }

    public function validateCard(Request $request)
    {
        $cardNumber = $request->input('card_number');

        $card = ScratchCard::where('card_number', $cardNumber)->first();

        if (!$card) {
            return response()->json(['status' => 'invalid']);
        }

        if ($card->status !== 'unused') {
            return response()->json(['status' => 'expired']);
        }

        // You can replace with real logic later
        $amount = $card->amount ?? rand(100, 1000);

        return response()->json([
            'status' => 'win',
            'amount' => $amount
        ]);
    }

    public function submit(Request $request, ScratchCardRedemptionService $service)
    {
        try {
            $result = $service->redeem($request->all());

            if ($result['success']) {
                return response()->json([
                    'status' => 'ok',
                    'amount' => $result['amount'] ?? null
                ]);
            }

            return response()->json([
                'status' => 'error',
                'message' => $result['message']
            ]);

        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation failed',
                'errors' => $e->errors()
            ], 422);
        }
    }
}
