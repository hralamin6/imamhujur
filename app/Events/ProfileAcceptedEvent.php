<?php

namespace App\Events;

use App\Models\Cv;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ProfileAcceptedEvent implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $messageData;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Cv $cv)
    {
        $this->messageData = $cv;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
//        return new PrivateChannel('channel-name');

//        return new PresenceChannel('test');
        return new Channel('test');
    }

    /**
     * JSON data to broadcast with this message
     */
//    public function broadcastWith()
//    {
//        return $this->data->toArray();
//    }

}
