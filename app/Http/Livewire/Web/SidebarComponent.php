<?php

namespace App\Http\Livewire\Web;

use App\Models\Page;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class SidebarComponent extends Component
{    use LivewireAlert;

    public function render()
    {
        $pages = Page::where('status', 'active')->get();
        return view('livewire.web.sidebar-component', compact('pages'));
    }
}
