<?php

namespace App\Http\Livewire\Web;

use App\Models\Page;
use Livewire\Component;

class SidebarComponent extends Component
{
    public function render()
    {
        $pages = Page::where('status', 'active')->get();
        return view('livewire.web.sidebar-component', compact('pages'));
    }
}
