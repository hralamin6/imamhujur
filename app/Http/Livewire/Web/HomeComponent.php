<?php

namespace App\Http\Livewire\Web;

use App\Models\Cv;
use App\Models\Job;
use App\Models\Setup;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class HomeComponent extends Component
{
    use LivewireAlert;

    public $init=false;

    public function init()
    {
        $this->init =  true;
    }
    public function render()
    {
        $imam_count = Cv::where('type', 'imam')->pluck('id')->count();
        $teacher_count = Cv::where('type', 'imam')->pluck('id')->count();
        $mosque_count = Cv::where('type', 'mosque')->pluck('id')->count();
        $madrasa_count = Cv::where('type', 'madrasa')->pluck('id')->count();
                    $imams = Cv::with('division', 'district')->where('type', 'imam')->where('status', 'active')->select('id', 'name', 'type', 'slug', 'sex', 'division_id', 'district_id', 'marital_status', 'hafiz', 'hsc', 'education_medium', 'daorah', 'monthly_hadia' )->latest()->limit(3)->get();
                    $teachers = Cv::with('division', 'district')->where('type', 'teacher')->where('status', 'active')->select('id', 'name', 'type', 'slug', 'sex', 'division_id', 'district_id', 'marital_status', 'hafiz', 'hsc', 'education_medium', 'daorah', 'monthly_hadia' )->latest()->limit(3)->get();
                    $mosques = Job::with('division', 'district')->where('type', 'mosque')->where('status', 'active')->select('id', 'name', 'type', 'slug', 'sex', 'division_id', 'district_id', 'marital_status', 'hafiz', 'hsc', 'education_medium', 'daorah', 'monthly_hadia' )->latest()->limit(3)->get();
                    $madrasas = Job::with('division', 'district')->where('type', 'madrasa')->where('status', 'active')->select('id', 'name', 'type', 'slug', 'sex', 'division_id', 'district_id', 'marital_status', 'hafiz', 'hsc', 'education_medium', 'daorah', 'monthly_hadia' )->latest()->limit(3)->get();
                $setup = Setup::first();
                return view('livewire.web.home-component', compact('setup', 'imams', 'teachers', 'mosques', 'madrasas', 'imam_count', 'teacher_count', 'mosque_count', 'madrasa_count'));
    }
}
