<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Livewire Components
use App\Livewire\Pages\Company\Index as CompanyIndex;
use App\Livewire\Pages\Company\Form as CompanyForm;
use App\Livewire\ScratchCardIndex;
use App\Livewire\ScratchCardCreate;
use App\Livewire\ScratchCardRedemptions;
use App\Livewire\ScratchCardDashboard;
use App\Livewire\ScratchCardCsvImport;

// Controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WhatsNewController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RewardsController;

// Services
use App\Services\ScratchCardRedemptionService;

/*
|--------------------------------------------------------------------------
| Public Website Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/products', [ProductsController::class, 'index'])->name('products.index');
Route::get('/whats-new', [WhatsNewController::class, 'index'])->name('whats-new.index');
Route::get('/rewards', [RewardsController::class, 'index'])->name('rewards.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');

/*
|--------------------------------------------------------------------------
| Rewards AJAX APIs
|--------------------------------------------------------------------------
*/

Route::post('/rewards/validate', function(Request $request) {
    $cardNumber = $request->input('card_number');
    $card = \App\Models\ScratchCard::where('card_number', $cardNumber)->first();
    if (!$card) {
        return response()->json(['status' => 'invalid']);
    }
    if ($card->status !== 'unused') {
        return response()->json(['status' => 'expired']);
    }
    $amount = $card->amount ?? rand(100, 1000);
    return response()->json(['status' => 'win', 'amount' => $amount]);
})->name('rewards.validate');

Route::post('/rewards/submit', [RewardsController::class, 'submit'])
    ->name('rewards.submit');
/*
|--------------------------------------------------------------------------
| Authenticated Routes
|--------------------------------------------------------------------------
*/

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::middleware(['auth'])->group(function () {

    // Company
    Route::get('company', CompanyIndex::class)->name('company.index');
    Route::get('company/create', CompanyForm::class)->name('company.create');
    Route::get('company/{companyId}/edit', CompanyForm::class)->name('company.edit');

    // Admin Scratch Cards
    Route::prefix('admin')->group(function () {

        Route::get('/scratch-cards', ScratchCardIndex::class)->name('admin.scratch-cards.index');
        Route::get('/scratch-cards/create', ScratchCardCreate::class)->name('admin.scratch-cards.create');
        Route::get('/scratch-cards/redemptions', ScratchCardRedemptions::class)->name('admin.scratch-cards.redemptions');
        Route::get('/scratch-cards/dashboard', ScratchCardDashboard::class)->name('admin.scratch-cards.dashboard');
        Route::get('/scratch-cards/import', ScratchCardCsvImport::class)->name('admin.scratch-cards.import');

        // Redeem API (Admin)
        Route::post('/scratch-cards/redeem', function (Request $request, ScratchCardRedemptionService $service) {
            try {
                return response()->json($service->redeem($request->all()));
            } catch (\Illuminate\Validation\ValidationException $e) {
                return response()->json([
                    'success' => false,
                    'errors' => $e->errors()
                ], 422);
            }
        })->name('admin.scratch-cards.redeem');
    });
});

require __DIR__.'/auth.php';
