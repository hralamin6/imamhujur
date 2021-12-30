<?php

namespace App\Http\Livewire\Web\Details;

use App\Models\Job;
use App\Models\Setup;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class JobDetailsComponent extends Component
{
    use LivewireAlert;

    public $jobId;
    public $unlocked;
    public function mount($id)
    {
        $this->jobId = $id;
    }
    public function unlockJob(job $job)
    {
        if ($job->unlockedUsers()->where('user_id', Auth::id())->count()==0) {
            if (Auth::user()->quantity>0){
                Auth::user()->decrement('quantity', 1);
                $job->unlockedUsers()->attach(Auth::id());
                $this->alert('success', 'Successfully saved');
            }else{
                $this->alert('error', 'You must buy contact request');
            }
        }else{
            $job->unlockedUsers()->detach(Auth::id());
            $this->alert('success', 'Successfully unsaved');

        }
    }
    public function render()
    {
        if (Auth::check()){
            if (Auth::user()->type==='admin' | @auth()->user()->job->slug==$this->jobId){
                $job = Job::whereId($this->jobId)->firstOrFail();
            }else{
                $job =Job::whereSlugAndStatus($this->jobId, 'active')->firstOrFail();
            }
        }else{
            $job = Job::whereSlugAndStatus($this->jobId, 'active')->firstOrFail();
        }
        $setup = Setup::first();

        return view('livewire.web.details.job-details-component', compact('job', 'setup'));
    }
}
