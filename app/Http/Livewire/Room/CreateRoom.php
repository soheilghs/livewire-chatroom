<?php

namespace App\Http\Livewire\Room;

use App\Events\Room\RoomAdded;
use Livewire\Component;

class CreateRoom extends Component {

    public $name;
    protected $rules = [
        'name' => 'required|min:2|unique:rooms,name'
    ];

    public function create() {
        $this->validate();

        auth()->user()->rooms()->create([
            'name' => $this->name,
            'slug' => str_replace(' ', '-', $this->name)
        ]);

        $this->emit('room.added');
        broadcast(new RoomAdded())->toOthers();

        $this->name = '';
    }

    public function render() {
        return view('livewire.room.create-room');
    }
}
