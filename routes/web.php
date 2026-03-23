<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\Company\Index as CompanyIndex;
use App\Livewire\Pages\Company\Form as CompanyForm;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::middleware(['auth'])->group(function () {
    Route::get('company', CompanyIndex::class)->name('company.index');
    Route::get('company/create', CompanyForm::class)->name('company.create');
    Route::get('company/{companyId}/edit', CompanyForm::class)->name('company.edit');
});

require __DIR__.'/auth.php';
