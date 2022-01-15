<?php

namespace App\Http\Livewire\Web;

use App\Models\Job;
use App\Models\District;
use App\Models\Division;
use App\Models\Union;
use App\Models\Upazila;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditJobComponent extends Component
{
    use LivewireAlert;

    use WithFileUploads;
    public $districts=false, $upazilas=false, $unions=false;
    public $isQaumia=false, $isGeneral=false, $isJsc = false, $isSsc = false, $isHsc = false, $isImam=false, $isTeacher = false;
    protected $listeners = ['confirmed' => 'editJob'];

    public $currentPage = 1;
    public $pages = [
        1=>['heading'=>'first page heading'  ],
        2=>['heading'=>'second page heading'  ],
        3=>['heading'=>'Fourth page heading'  ],
        4=>['heading'=>'Fiveth page heading'  ],
        5=>['heading'=>'six page heading'  ],
        6=>['heading'=>'s page heading'  ],
        7=>['heading'=>'e page heading'  ],
        8=>['heading'=>'9 page heading'  ],
    ];
    public $test = false, $experience,  $type, $sex, $dob, $kitab, $nurani, $hafizi,  $image=null, $about, $commitment, $job, $name, $phone, $additional_phone, $email, $division_id, $district_id, $upazila_id, $union_id, $hafiz, $education_medium, $daorah, $jsc, $ssc, $hsc, $max_education, $majhab, $politics, $pir_muridi, $majar, $tabiz, $milad, $marital_status, $location_of_job, $monthly_hadia, $monthly_leave, $taking_meal, $staying_place, $maktob, $khatib, $muajjin;
    private $validationRules = [
        1=>[
            'name'=> 'required|min:4|max:66',
            'sex'=> 'required',
            'phone'=> 'required|digits:11',
            'additional_phone'=> 'required|digits:11',
            'email'=> 'required|email',
            'marital_status'=> 'nullable',
            'dob'=> 'required',
        ],
        2=>[
            'division_id'=> 'required',
            'district_id'=> 'required',
            'upazila_id'=> 'required',
            'union_id'=> 'required',
        ],
        3=>[
            'education_medium'=> 'required',
            'daorah'=> 'nullable',
            'jsc'=> 'nullable',
            'ssc'=> 'nullable',
            'hsc'=> 'nullable',
            'max_education'=> 'required',
            'hafiz'=> 'nullable',
            'experience'=> 'required',
        ],
        4=>[
            'majhab'=> 'required',
            'politics'=> 'required',
            'pir_muridi'=> 'required',
            'majar'=> 'required',
            'tabiz'=> 'required',
            'milad'=> 'required',
        ],
        5=>[
            'location_of_job'=> 'required',
            'monthly_hadia'=> 'numeric',
            'monthly_leave'=> 'numeric',
            'taking_meal'=> 'required',
            'staying_place'=> 'required',
            'maktob'=> 'nullable',
            'khatib'=> 'nullable',
            'muajjin'=> 'nullable',
            'kitab'=> 'nullable',
            'nurani'=> 'nullable',
            'hafizi'=> 'nullable',
        ],
        0=>[
            'image'=>  'nullable|image|max:512',
        ],
        7=>[
            'commitment'=> 'accepted',
            'about'=> 'nullable',
        ],
        8=>[
            'about'=> 'nullable',
        ]
    ];
    public function updated($property){
        if ($this->currentPage === 6){
            $this->validateOnly($property, $this->validationRules[0]);
        }else{
            $this->validateOnly($property, $this->validationRules[$this->currentPage]);
        }
    }
    public function nextPage(){
        if ($this->currentPage === 6){
            $data = $this->validate($this->validationRules[0]);
            $this->validate($this->validationRules[0]);
            if (($this->image)) {
                $this->job->clearMediaCollection('job');
                $this->job->addMedia($this->image->getRealPath())->toMediaCollection('job');
            }
            $this->image = null;

            $this->alert('success', 'Successfully saved');
            $this->currentPage++;
        }else{
            $data = $this->validate($this->validationRules[$this->currentPage]);
            Job::whereUser_id(Auth::id())->update($data);
            $this->alert('success', 'Successfully saved');
            $this->currentPage++;
        }
    }
    public function previousPage(){
        $this->currentPage--;
    }
    public function updatedType($id){
        if ($id=='imam'){
            $this->kitab = null;
            $this->nurani = null;
            $this->hafizi = null;
            $this->isImam = true;
        }else{
            $this->maktob = null;
            $this->khatib = null;
            $this->muajjin = null;
            $this->isTeacher = true;

        }
    }

    public function updatedDivisionId($id){
        $this->districts = null;
        $this->upazilas = null;
        $this->unions = null;
        $this->districts = District::where('division_id', $id)->get();
    }
    public function updateddistrictid($id){
        $this->upazilas = null;
        $this->unions = null;
        $this->upazilas = Upazila::where('district_id', $id)->get();
    }
    public function updatedUpazilaId($id){
        $this->unions = null;
        $this->unions = Union::where('upazila_id', $id)->get();
    }

    public function updatedEducationMedium($id){
        $this->isQaumia = false;
        $this->isGeneral = false;
        if ($id=='qaumia'){
            $this->reset("jsc", "ssc", "hsc");
            $this->isQaumia = true;
        }
        $this->reset("daorah");
        if ($id=='general'){$this->isGeneral = true;}
    }
    public function updatedJsc($id){
        $this->isJsc = false;
        if ($id==true){$this->isJsc = true;}
    }
    public function updatedSsc($id){
        $this->isSsc = false;
        if ($id==true){$this->isSsc = true;}
    }
    public function updatedHsc($id){
        $this->isHsc = false;
        if ($id==true){$this->isHsc = true;}
    }

    public function mount($id=null)
    {
        if (Auth::user()->type=='admin'){
            if (!is_null($id)){
                $job = Job::findorFail($id);
            }
        }else{
            $job = Job::whereUser_id(Auth::id())->firstOrFail();
        }
        $this->job = $job;
        $this->name = $job->name;
        $this->type = $job->type;
        $this->sex = $job->sex;
        $this->phone = $job->phone;
        $this->dob =$job->dob!=null?Carbon::parse($job->dob)->format('Y-m-d'):"";
        $this->additional_phone = $job->additional_phone;
        $this->email = $job->email;
        $this->division_id = $job->division_id;
        $this->district_id = $job->district_id;
        $this->upazila_id = $job->upazila_id;
        $this->union_id = $job->union_id;
        $this->division_id != null? $this->districts = District::where('division_id', $this->division_id)->get():'';
        $this->district_id != null? $this->upazilas = Upazila::where('district_id', $this->district_id)->get():'';
        $this->upazila_id != null? $this->unions = Union::where('upazila_id', $this->upazila_id)->get():'';

        $this->education_medium = $job->education_medium;
        if($this->education_medium=='general'){$this->isGeneral = true;
        }elseif($this->education_medium=='qaumia'){$this->isQaumia = true;}
        $this->daorah = $job->daorah;
        $this->jsc = $job->jsc;
        $this->jsc ==true?$this->isJsc = true:'';
        $this->ssc = $job->ssc;
        $this->ssc ==true?$this->isSsc = true:'';
        $this->hsc = $job->hsc;
        $this->hsc ==true?$this->isHsc = true:'';
        $this->max_education = $job->max_education;
        $this->experience = $job->experience;
        $this->hafiz = $job->hafiz;
        $this->majhab = $job->majhab;
        $this->politics = $job->politics;
        $this->pir_muridi = $job->pir_muridi;
        $this->majar = $job->majar;
        $this->tabiz = $job->tabiz;
        $this->milad = $job->milad;
        $this->marital_status = $job->marital_status;
        $this->location_of_job = $job->location_of_job;
        $this->monthly_hadia = $job->monthly_hadia;
        $this->monthly_leave = $job->monthly_leave;
        $this->taking_meal = $job->taking_meal;
        $this->staying_place = $job->staying_place;
        $this->maktob = $job->maktob;
        $this->khatib = $job->khatib;
        $this->muajjin = $job->muajjin;
        $this->about = $job->about;
        $this->commitment = $job->commitment;
    }
    public function editJob()
    {
//        $data = $this->validate(collect($this->validationRules)->collapse()->toArray());
        if ($this->currentPage === 6){
            $this->validate($this->validationRules[0]);
        }else{
            $this->validate($this->validationRules[$this->currentPage]);
        }
        $data['request_status'] = 'requested';
        Job::whereUser_id(Auth::id())->update($data);
        $this->reset();
        $this->resetValidation();
        $this->alert('success', 'Successfully updated');
        $this->mount();
    }
    public function confirmation()
    {
        $this->dispatchBrowserEvent('showConfirmation',[
            'title' => 'Are you sure!',
            'icon' => 'warning',
            'text' => 'You cant be able tto revert this',
            'confirmButtonText' => 'Submit',
        ]);
    }

    public function render()
    {
        $divisions = Division::all();
        return view('livewire.web.edit-job-component',compact('divisions'))->layout('layouts.app');
    }
}
