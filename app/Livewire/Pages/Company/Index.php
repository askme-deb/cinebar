<?php

namespace App\Livewire\Pages\Company;

use App\Models\CompanyProfile;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{    protected $layout = 'layouts.app';
    public $companies;

    public function mount()
    {
        $this->companies = CompanyProfile::with('user')->get();
    }

    public function render()
    {
        return view('livewire.pages.company.index')
            ->layout('layouts.app');
    }
}
