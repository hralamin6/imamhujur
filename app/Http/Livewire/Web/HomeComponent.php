<?php

namespace App\Http\Livewire\Web;

use App\Models\Cv;
use App\Models\Job;
use App\Models\Setup;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class HomeComponent extends Component
{
    public $init=false;

    public function init()
    {
        $this->init =  true;
    }
    public function render()
    {
                    $imams = Cv::where('type', 'imam')->where('status', 'active')->latest()->limit(3)->get();
                    $teachers = Cv::where('type', 'teacher')->where('status', 'active')->latest()->limit(3)->get();
                    $mosques = Job::where('type', 'mosque')->where('status', 'active')->latest()->limit(3)->get();
                    $madrasas = Job::where('type', 'madrasa')->where('status', 'active')->latest()->limit(3)->get();
                $setup = Setup::first();
                return view('livewire.web.home-component', compact('setup', 'imams', 'teachers', 'mosques', 'madrasas'));
    }
}
