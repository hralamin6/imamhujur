<?php

namespace App\Http\Livewire;

use App\Models\Page;
use Livewire\Component;

class PageComponent extends Component
{
    public $page;
    public function mount($pageName)
    {
        $this->page = Page::where('name', $pageName)->firstOrFail();
    }
    public function render()
    {
        return view('livewire.page-component');
    }
}
