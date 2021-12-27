<?php

namespace App\Http\Livewire;

use App\Events\MessageSentEvent;
use App\Events\TypingEvent;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ChatRoom extends Component
{
    public $messages, $body=null;
    public $here = [];
    protected $listeners = [
        'echo-presence:demo,here' => 'here',
        'echo-presence:demo,joining' => 'joining',
        'echo-presence:demo,leaving' => 'leaving',
    ];
    public function render()
    {
        $this->messages = Message::
        with('user')->latest()->limit(3)->get()->reverse()->values();
        return view('livewire.chat-room');
    }

//    public function updatedBody($value)
//    {
//        if ($this->body!=null){
//            broadcast(new TypingEvent())->toOthers();
//        }
//    }
    public function sendMessage()
    {
//        if (! $this->body) {
//            $this->addError('messageBody', 'Message body is required.');
//            return;
//        }

        $message = Auth::user()->messages()->create([
            'body' => $this->body,
        ]);
        broadcast(new MessageSentEvent($message))->toOthers();
        $this->body=null;

    }

    /**
     * @param $message
     */
    public function incomingMessage($message)
    {
        // get the hydrated model from incoming json/array.
        $message = Message::with('user')->find($message['id']);

        array_push($this->messages, $message);
    }

    /**
     * @param $data
     */
    public function here($data)
    {
        $this->here = $data;
    }

    /**
     * @param $data
     */
    public function leaving($data)
    {
        $here = collect($this->here);

        $firstIndex = $here->search(function ($authData) use ($data) {
            return $authData['id'] == $data['id'];
        });

        $here->splice($firstIndex, 1);

        $this->here = $here->toArray();
    }

    /**
     * @param $data
     */
    public function joining($data)
    {
        $this->here[] = $data;
    }
}
