<?php

namespace App\Http\Livewire\Web\Show;

use App\Models\Cv;
use App\Models\District;
use App\Models\Division;
use App\Models\Setup;
use App\Models\Union;
use App\Models\Upazila;
use Livewire\Component;
use Livewire\WithPagination;

class ImamComponent extends Component
{
    use WithPagination;

    public $hafiz, $marital_status, $nameOrId, $division_id, $district_id, $upazila_id, $union_id, $districts=false, $upazilas=false, $unions=false;

    public function updatedDivisionId($id){
        $this->reset('districts', 'district_id', 'nameOrId', 'marital_status', 'hafiz');
        $this->districts = District::where('division_id', $id)->get();
    }
    public function updateddistrictid($id){
        $this->reset('nameOrId', 'marital_status', 'hafiz');
    }
    public function render()
    {
        $imams = Cv::where('type', 'imam')->where('status', 'active')->
        when($this->hafiz, function($query) {
            return $query->where('hafiz', $this->hafiz);
        })->when($this->marital_status, function($query) {
            return $query->where('marital_status', $this->marital_status);
        })->when($this->nameOrId, function($query) {
            return $query->where('name', 'like', '%'.$this->nameOrId.'%')->orWhere('slug', 'like', '%'.$this->nameOrId.'%');
        })->when($this->division_id, function($query) {
            return $query->where('division_id',$this->division_id);
        })->when($this->district_id, function($query) {
            return $query->where('district_id',$this->district_id);
        })->latest()->limit(9)->paginate(9);
        $setup = Setup::first();
        $divisions = Division::all();
        return view('livewire.web.show.imam-component', compact('imams', 'setup', 'divisions'));
    }
}
