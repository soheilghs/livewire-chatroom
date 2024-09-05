<?php

namespace App\Http\Livewire\Room;

use App\Models\Room;
use Livewire\Component;

class Index extends Component {

    protected $listeners = [
        'room.added' => '$refresh',
        'echo-private:room.added,Room\\RoomAdded' => '$refresh'
    ];

    public function render() {
        $rooms = Room::latest()->paginate(30);
        return view('livewire.room.index',
            compact('rooms'));
    }
}
