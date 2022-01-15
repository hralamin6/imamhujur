<?php

namespace App\Http\Livewire\Web;

use App\Models\Conversation;
use App\Models\Cv;
use App\Models\Setup;
use App\Models\User;
use Illuminate\Support\Facades\App;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class HeaderComponent extends Component
{    use LivewireAlert;

    public $lang = 'en';

    public function ChangeLang()
    {
        if (session()->has('locale')){
            if (session()->get('locale')=='en'){
                App::setLocale('bn');
                session()->put('locale', 'bn');
            }else{
                App::setLocale('en');
                session()->put('locale', 'en');
            }
            return redirect()->to(url()->previous());
        }else{
            App::setLocale($this->lang);
            session()->put('locale', $this->lang);
        }

    }
    public function render()
    {
        $conversation = Conversation::whereSender_idAndReceiver_id(auth()->id(), 1)->first();

//        if (!session()->has('locale')){
//            App::setLocale('en');
//            session()->put('locale', 'en');
//        }
        $setup = Setup::first();
        return view('livewire.web.header-component', compact('conversation', 'setup'));
    }
}
