<?php

namespace App\Http\Livewire\Web;

use App\Models\Cv;
use App\Models\District;
use App\Models\Division;
use App\Models\Union;
use App\Models\Upazila;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;
use function PHPUnit\Framework\isFalse;

class EditCvComponent extends Component
{
    use LivewireAlert;

    use WithFileUploads;
    public $districts=false, $upazilas=false, $unions=false;
    public $isProfession=false, $isQaumia=false, $isGeneral=false, $isJsc = false, $isSsc = false, $isHsc = false, $isImam=false, $isTeacher = false;
    protected $listeners = ['confirmed' => 'editCv'];

    public $currentPage = 1;
    public $pages = [
        1=>['heading'=>'first page heading'  ],
        2=>['heading'=>'second page heading'  ],
        3=>['heading'=>'Third page heading'  ],
        4=>['heading'=>'Fourth page heading'  ],
        5=>['heading'=>'Fiveth page heading'  ],
        6=>['heading'=>'six page heading'  ],
        7=>['heading'=>'s page heading'  ],
        8=>['heading'=>'e page heading'  ],
        9=>['heading'=>'9 page heading'  ],
    ];
    public $test = false, $experience, $type, $sex, $dob, $kitab, $nurani, $hafizi,  $image=null,$hand_writing=null,$certificate=null,$recitation=null, $about, $commitment, $cv, $name, $phone, $additional_phone, $email, $division_id, $district_id, $upazila_id, $union_id, $profession, $reason_of_leaving, $hafiz, $education_medium, $daorah, $jsc, $jsc_gpa, $ssc, $ssc_gpa, $hsc, $hsc_gpa, $max_education, $majhab, $politics, $pir_muridi, $majar, $tabiz, $milad, $marital_status, $location_of_job, $monthly_hadia, $monthly_leave, $taking_meal, $staying_place, $maktob, $khatib, $muajjin;
    private $validationRules = [
        1=>[
            'name'=> 'required|min:4|max:66',
            'phone'=> 'required|digits:11',
            'sex'=> 'required',
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
            'profession'=> 'nullable',
            'reason_of_leaving'=> 'required_if:profession,true',
        ],
        4=>[
            'education_medium'=> 'required',
            'daorah'=> 'nullable',
            'jsc'=> 'nullable',
            'jsc_gpa'=> 'required_if:jsc,true',
            'ssc'=> 'nullable',
            'ssc_gpa'=> 'required_if:ssc,true',
            'hsc'=> 'nullable',
            'hsc_gpa'=> 'required_if:hsc,true',
            'max_education'=> 'required',
            'hafiz'=> 'nullable',
            'experience'=> 'required',
        ],
        5=>[
            'majhab'=> 'required',
            'politics'=> 'required',
            'pir_muridi'=> 'required',
            'majar'=> 'required',
            'tabiz'=> 'required',
            'milad'=> 'required',
        ],
        6=>[
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
            'recitation'=>  'nullable|mimes:application/octet-stream,audio/mpeg,mpga,mp3,wav|max:1024',
            'image'=>  'nullable|image|max:512',
            'hand_writing'=>  'nullable|image|max:512',
            'certificate'=>  'nullable|image|max:512',
        ],
        8=>[
            'about'=> 'required',
            'commitment'=> 'required',
        ],
        9=>[
            'about'=> 'nullable',
        ]
    ];
    public function updated($property){
        if ($this->currentPage === 7){
            $this->validateOnly($property, $this->validationRules[0]);
        }else{
            $this->validateOnly($property, $this->validationRules[$this->currentPage]);
        }
    }
    public function nextPage(){
//        dd($this->profession);
        if ($this->currentPage === 7){
            $data = $this->validate($this->validationRules[0]);
            $this->validate($this->validationRules[0]);
            if (($this->image)) {
                $this->cv->clearMediaCollection('cv');
                $this->cv->addMedia($this->image->getRealPath())->toMediaCollection('cv');
            }
            if (($this->hand_writing)) {
                $this->cv->clearMediaCollection('hand_writing');
                $this->cv->addMedia($this->hand_writing->getRealPath())->toMediaCollection('hand_writing');
            }
            if (($this->certificate)) {
                $this->cv->clearMediaCollection('certificate');
                $this->cv->addMedia($this->certificate->getRealPath())->toMediaCollection('certificate');
            }
            if (($this->recitation)) {
                $this->cv->clearMediaCollection('recitation');
                $this->cv->addMedia($this->recitation->getRealPath())->toMediaCollection('recitation');
            }
            $this->image = null;
            $this->hand_writing = null;
            $this->certificate = null;
            $this->recitation = null;

            $this->alert('success', 'Successfully saved');
            $this->currentPage++;
        }else{
            $data = $this->validate($this->validationRules[$this->currentPage]);
            Cv::whereUser_id(Auth::id())->update($data);
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
    public function updatedProfession($id){
        $this->isProfession = false;
        $id==true?$this->isProfession = true:$this->reset('reason_of_leaving');
    }
    public function updatedEducationMedium($id){
        $this->isQaumia = false;
        $this->isGeneral = false;
        if ($id=='qaumia'){
            $this->reset("jsc", "jsc_gpa", "ssc", "ssc_gpa", "hsc", "hsc_gpa");
            $this->isQaumia = true;
        }
        $this->reset("daorah");
        if ($id=='general'){$this->isGeneral = true;}
    }
    public function updatedJsc($id){
        $this->jsc_gpa = null;
        $this->isJsc = false;
        if ($id==true){$this->isJsc = true;}
    }
    public function updatedSsc($id){
        $this->ssc_gpa = null;
        $this->isSsc = false;
        if ($id==true){$this->isSsc = true;}
    }
    public function updatedHsc($id){
        $this->hsc_gpa = null;
        $this->isHsc = false;
        if ($id==true){$this->isHsc = true;}
    }

    public function mount($id=null)
    {
        if (Auth::user()->type=='admin'){
            if (!is_null($id)){
                $cv = Cv::findorFail($id);
            }
        }else{
        $cv = Cv::whereUser_id(Auth::id())->firstOrFail();
        }
        $this->cv = $cv;
        $this->name = $cv->name;
        $this->type = $cv->type;
        $this->sex = $cv->sex;
        $this->phone = $cv->phone;
        $this->dob =$cv->dob!=null?Carbon::parse($cv->dob)->format('Y-m-d'):"";
        $this->additional_phone = $cv->additional_phone;
        $this->email = $cv->email;
        $this->division_id = $cv->division_id;
        $this->district_id = $cv->district_id;
        $this->upazila_id = $cv->upazila_id;
        $this->union_id = $cv->union_id;
        $this->division_id != null? $this->districts = District::where('division_id', $this->division_id)->get():'';
        $this->district_id != null? $this->upazilas = Upazila::where('district_id', $this->district_id)->get():'';
        $this->upazila_id != null? $this->unions = Union::where('upazila_id', $this->upazila_id)->get():'';
        $this->profession = $cv->profession?true:false;
        $this->profession===true?$this->isProfession = true:'';
        $this->reason_of_leaving = $cv->reason_of_leaving;

        $this->education_medium = $cv->education_medium;
        if($this->education_medium=='general'){$this->isGeneral = true;
        }elseif($this->education_medium=='qaumia'){$this->isQaumia = true;}
        $this->reason_of_leaving = $cv->reason_of_leaving;
        $this->daorah = $cv->daorah;
        $this->jsc = $cv->jsc;
        $this->jsc ==true?$this->isJsc = true:'';
        $this->jsc_gpa = $cv->jsc_gpa;
        $this->ssc = $cv->ssc;
        $this->ssc ==true?$this->isSsc = true:'';
        $this->ssc_gpa = $cv->ssc_gpa;
        $this->hsc = $cv->hsc;
        $this->hsc ==true?$this->isHsc = true:'';
        $this->hsc_gpa = $cv->hsc_gpa;
        $this->max_education = $cv->max_education;
        $this->experience = $cv->experience;
        $this->hafiz = $cv->hafiz;
        $this->majhab = $cv->majhab;
        $this->politics = $cv->politics;
        $this->pir_muridi = $cv->pir_muridi;
        $this->majar = $cv->majar;
        $this->tabiz = $cv->tabiz;
        $this->milad = $cv->milad;
        $this->marital_status = $cv->marital_status;
        $this->location_of_job = $cv->location_of_job;
        $this->monthly_hadia = $cv->monthly_hadia;
        $this->monthly_leave = $cv->monthly_leave;
        $this->taking_meal = $cv->taking_meal;
        $this->staying_place = $cv->staying_place;
        $this->maktob = $cv->maktob;
        $this->khatib = $cv->khatib;
        $this->muajjin = $cv->muajjin;
        $this->about = $cv->about;
        $this->commitment = $cv->commitment;
    }
    public function editCv()
    {
//        $data = $this->validate(collect($this->validationRules)->collapse()->toArray());
        if ($this->currentPage === 7){
            $this->validate($this->validationRules[0]);
        }else{
            $this->validate($this->validationRules[$this->currentPage]);
        }
        $data['request_status'] = 'requested';
        Cv::whereUser_id(Auth::id())->update($data);
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
        return view('livewire.web.edit-cv-component',compact('divisions'))->layout('layouts.app');
    }

}
