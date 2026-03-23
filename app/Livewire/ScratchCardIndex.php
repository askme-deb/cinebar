<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\ScratchCard;
use App\Models\Company;

class ScratchCardIndex extends Component
{
    use WithPagination;

    public $company = '';
    public $status = '';
    public $dateFrom = '';
    public $dateTo = '';
    public $search = '';

    public function render()
    {
        $query = ScratchCard::query();

        if ($this->company) {
            $query->where('company_id', $this->company);
        }
        if ($this->status) {
            $query->where('status', $this->status);
        }
        if ($this->dateFrom && $this->dateTo) {
            $query->whereBetween('created_at', [$this->dateFrom, $this->dateTo]);
        }
        if ($this->search) {
            $query->where('card_number', 'like', "%{$this->search}%");
        }

        $scratchCards = $query->with('company')->orderByDesc('created_at')->paginate(15);
        $companies = Company::all();
        return view('livewire.scratch-card-index', [
            'scratchCards' => $scratchCards,
            'companies' => $companies,
        ])->layout('layouts.app');
    }
}
