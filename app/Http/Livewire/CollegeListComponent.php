<?php

namespace App\Http\Livewire;

use App\Models\College;
use App\Models\Cv;
use App\Models\District;
use App\Models\Division;
use App\Models\Setup;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class CollegeListComponent extends Component
{

    use WithPagination;

    public $gpa, $board, $district=[],$dis=[], $shift, $medium, $group, $gender, $mark ,$hafiz, $marital_status, $division_id;

    public function updatedDistrict($query)
    {
//        krsort($this->district);
    }

    public function render()
    {

        $colleges = College::
            when($this->district, function($query) {
                return $query->orderByRaw("FIELD(district, '".implode("','",$this->district)."') desc");
            })->when($this->medium, function($query) {
                return $query->where('medium', $this->medium);
            })->
            when($this->board, function($query) {
                return $query->whereIn('board', $this->board);
            })->
            when($this->group, function($query) {
                return $query->where('group', $this->group);
            })->
            when($this->shift, function($query) {
                return $query->where('shift', $this->shift);
            })->
           when($this->gender, function($query) {
            return $query->where('gender',$this->gender);
            })->when($this->mark, function($query) {
                return $query->where('mark',$this->mark);
            })->when($this->gpa, function($query) {
                return $query->where('gpa', '<=', $this->gpa);
            })
//            ->orderByRaw('FIELD(district, "Shariatpur", "Madaripur") DESC')
            ->orderBy('gpa', 'desc')
            ->orderBy('mark', 'desc')->latest()
            ->paginate(9);
        $setup = Setup::first();
        $divisions = Division::all();
        $districts = District::all();
        return view('livewire.college-list-component', compact('colleges', 'setup', 'divisions', 'districts'));
    }
}
