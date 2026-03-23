<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ScratchCard;
use App\Models\Company;
use Illuminate\Validation\Rule;

class ScratchCardCreate extends Component
{
    public $company_id;
    public $card_number;
    public $coupon_value;
    public $status = 'unused';

    protected function rules()
    {
        return [
            'company_id' => 'required|exists:companies,id',
            'card_number' => 'required|string|unique:scratch_cards,card_number',
            'coupon_value' => 'required|numeric|min:0',
            'status' => ['required', Rule::in(['unused', 'used', 'expired'])],
        ];
    }

    public function save()
    {
        $this->validate();
        ScratchCard::create([
            'company_id' => $this->company_id,
            'card_number' => $this->card_number,
            'coupon_value' => $this->coupon_value,
            'status' => $this->status,
        ]);
        session()->flash('success', 'Scratch card created successfully.');
        $this->reset(['company_id', 'card_number', 'coupon_value', 'status']);
    }

    public function render()
    {
        $companies = Company::all();
        return view('livewire.scratch-card-create', [
            'companies' => $companies,
        ])->layout('layouts.app');
    }
}
