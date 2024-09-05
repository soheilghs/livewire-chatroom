<?php

namespace App\Http\Livewire\Room;

use App\Models\Room;
use Livewire\Component;

class SingleRoom extends Component {

    public $room;

    public function mount(Room $room) {
        $this->room = $room;
    }

    public function render() {
        $messages = $this->room->messages()
            ->with('user')->latest()->get();
        return view('livewire.room.single-room',
            compact('messages'));
    }
}
