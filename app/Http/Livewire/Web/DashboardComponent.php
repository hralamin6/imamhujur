<?php

namespace App\Http\Livewire\Web;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class DashboardComponent extends Component
{
    use LivewireAlert;

    public function render()
    {
        return view('livewire.web.dashboard-component');
    }
}
