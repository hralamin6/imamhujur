<?php

namespace App\Http\Livewire\Web;

use App\Models\Cv;
use App\Models\Setup;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UnlockedProfileComponent extends Component
{
    public function render()
    {
        $imams = Auth::user()->unlockedCvs;
        $mosques = Auth::user()->unlockedJobs;
        $setup = Setup::first();

        return view('livewire.web.unlocked-profile-component', compact('imams', 'setup', 'mosques'));
    }
}
