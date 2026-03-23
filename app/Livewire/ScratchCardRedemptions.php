<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\ScratchCardRedemption;
use App\Models\Company;

class ScratchCardRedemptions extends Component
{
    use WithPagination;

    // public $company = '';
    public $dateFrom = '';
    public $dateTo = '';
    public $search = '';

    public function render()
    {
        $query = ScratchCardRedemption::query();

        // if ($this->company) {
        //     $query->where('company_id', $this->company);
        // }
        if ($this->dateFrom && $this->dateTo) {
            $query->whereBetween('redeemed_at', [$this->dateFrom, $this->dateTo]);
        }
        if ($this->search) {
            $query->where('name', 'like', "%{$this->search}%")
                ->orWhere('email', 'like', "%{$this->search}%")
                ->orWhere('mobile', 'like', "%{$this->search}%")
                ->orWhereHas('scratchCard', function($q) {
                    $q->where('card_number', 'like', "%{$this->search}%");
                });
        }

        $redemptions = $query->with(['scratchCard.company'])->orderByDesc('redeemed_at')->paginate(15);

        return view('livewire.scratch-card-redemptions', [
            'redemptions' => $redemptions,
        ])->layout('layouts.app');
    }
}
