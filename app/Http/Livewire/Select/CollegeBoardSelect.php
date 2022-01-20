<?php

namespace App\Http\Livewire\Select;

use Asantibanez\LivewireSelect\LivewireSelect;
use Illuminate\Support\Collection;

class CollegeBoardSelect extends LivewireSelect
{
    public function options($searchTerm = null) : Collection
    {
        return collect([
            [
                'value' => 'honda',
                'description' => 'Honda',
            ],
            [
                'value' => 'mazda',
                'description' => 'Mazda',
            ],
            [
                'value' => 'tesla',
                'description' => 'Tesla',
            ],
        ]);
    }
}
