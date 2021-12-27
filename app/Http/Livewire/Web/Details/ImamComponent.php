<?php

namespace App\Http\Livewire\Web\Details;

use App\Models\Imam;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ImamComponent extends Component
{
    use LivewireAlert;

    public $imamId;
    public function mount($id)
    {
        $this->imamId = $id;
    }
    public function render()
    {
        $imam = Imam::find($this->imamId);
        return view('livewire.web.details.imam-component', compact('imam'))->layout('layouts.web');
    }
}
