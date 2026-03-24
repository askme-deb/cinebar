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
    public $totalStorage;
    public $usedStorage;
    public $monthlyRedemptions = [];
    public $monthlyRedemptionsLabels = [];
    public $revenueChartData = [];
    public $revenueChartCategories = [];
    public $revenuePeriod = 'month';

    public function mount()
    {
        $this->totalCards = ScratchCard::count();
        $this->usedCards = ScratchCard::where('status', 'used')->count();
        $this->unusedCards = ScratchCard::where('status', 'unused')->count();
        $this->expiredCards = ScratchCard::where('status', 'expired')->count();

        // Monthly redemptions (used cards grouped by month)
        $monthly = ScratchCard::where('status', 'used')
            ->selectRaw("DATE_FORMAT(updated_at, '%m/%Y') as month, COUNT(*) as count")
            ->groupBy('month')
            ->orderBy('month')
            ->get();
        $this->monthlyRedemptionsLabels = $monthly->pluck('month')->toArray();
        $this->monthlyRedemptions = $monthly->pluck('count')->toArray();

        // Revenue chart data (used cards by period)
        $this->setRevenueChartData('month');
    }

    public function setRevenueChartData($period)
    {
        $this->revenuePeriod = $period;
        $query = ScratchCard::where('status', 'used');
        if ($period === 'day') {
            $data = $query->selectRaw("DATE_FORMAT(updated_at, '%Y-%m-%d') as label, COUNT(*) as count")
                ->groupBy('label')
                ->orderBy('label')
                ->get();
        } elseif ($period === 'week') {
            $data = $query->selectRaw("YEARWEEK(updated_at, 1) as label, COUNT(*) as count")
                ->groupBy('label')
                ->orderBy('label')
                ->get();
            // Format week label as 'YYYY-WW'
            $data->transform(function($item) {
                $item->label = substr($item->label, 0, 4) . '-W' . substr($item->label, 4);
                return $item;
            });
        } elseif ($period === 'year') {
            $data = $query->selectRaw("YEAR(updated_at) as label, COUNT(*) as count")
                ->groupBy('label')
                ->orderBy('label')
                ->get();
        } else { // month
            $data = $query->selectRaw("DATE_FORMAT(updated_at, '%Y-%m') as label, COUNT(*) as count")
                ->groupBy('label')
                ->orderBy('label')
                ->get();
        }
        $this->revenueChartCategories = $data->pluck('label')->toArray();
        $this->revenueChartData = $data->pluck('count')->toArray();
    }

    public function render()
    {
        return view('livewire.scratch-card-dashboard')->layout('layouts.app');
    }
}
