<?php

namespace App\Livewire\Layout;

use App\Livewire\Actions\Logout;
use Livewire\Component;

class Navigation extends Component
{
    public function logout()
    {
        app(Logout::class)();
        return redirect('/');
    }

    public function render()
    {
        return view('livewire.layout.navigation');
    }
}
