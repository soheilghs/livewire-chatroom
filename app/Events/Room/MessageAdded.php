<?php

namespace App\Events\Room;

use App\Models\Message;
use App\Models\Room;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MessageAdded implements ShouldBroadcast {

    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $roomId;
    public $messageId;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($roomId, $messageId) {
        $this->roomId = $roomId;
        $this->messageId = $messageId;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel
     */
    public function broadcastOn() {
        return new PrivateChannel("room.chat.{$this->roomId}");
    }
}
