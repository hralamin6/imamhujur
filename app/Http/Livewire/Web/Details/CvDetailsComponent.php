<?php

namespace App\Http\Livewire\Web\Details;

use App\Models\Cv;
use App\Models\Setup;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class CvDetailsComponent extends Component
{
    use LivewireAlert;

    public $cvId;
    public $unlocked;
    public function mount($id)
    {
        $this->cvId = $id;
    }
    public function unlockCv(Cv $cv)
    {
        if ($cv->unlockedUsers()->where('user_id', Auth::id())->count()==0) {
            if (Auth::user()->quantity>0){
                Auth::user()->decrement('quantity', 1);
                $cv->unlockedUsers()->attach(Auth::id());
                $this->alert('success', 'Successfully saved');
            }else{
                $this->alert('error', 'You must buy contact request');
            }
        }else{
            $cv->unlockedUsers()->detach(Auth::id());
            $this->alert('success', 'Successfully unsaved');

        }
    }
    public function render()
    {
        if (Auth::check()){
            if (Auth::user()->type==='admin' | @auth()->user()->cv->id==$this->cvId){
                $cv = Cv::whereId($this->cvId)->firstOrFail();
            }else{
                $cv = Cv::whereIdAndStatus($this->cvId, 'active')->firstOrFail();
            }
        }else{
            $cv = Cv::whereIdAndStatus($this->cvId, 'active')->firstOrFail();
        }
        $setup = Setup::first();
        return view('livewire.web.details.cv-details-component', compact('cv', 'setup'));
    }
}
