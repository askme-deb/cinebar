<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ScratchCard;

class ScratchCardDashboard extends Component
{
    public $totalCards;
    public $usedCards;
    public $unusedCards;
    public $expiredCards;

    public function mount()
    {
        $this->totalCards = ScratchCard::count();
        $this->usedCards = ScratchCard::where('status', 'used')->count();
        $this->unusedCards = ScratchCard::where('status', 'unused')->count();
        $this->expiredCards = ScratchCard::where('status', 'expired')->count();
    }

    public function render()
    {
        return view('livewire.scratch-card-dashboard')->layout('layouts.app');
    }
}
