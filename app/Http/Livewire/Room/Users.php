<?php

namespace App\Http\Livewire\Room;

use App\Models\Room;
use Livewire\Component;

class Users extends Component {

    public $users;
    public $room;

    public function getListeners() {
        return [
            "echo-presence:room.chat.{$this->room->id},here" =>
                'setUsersHere',
            "echo-presence:room.chat.{$this->room->id},joining" =>
                'setUsersJoining',
            "echo-presence:room.chat.{$this->room->id},leaving" =>
                'setUsersLeaving'
        ];
    }

    public function mount(Room $room) {
        $this->room = $room;
        $this->users = collect([]);
    }

    public function setUsersHere($users) {
        $this->users = collect($users);
    }

    public function setUsersJoining($user) {
        $this->users->push($user);
    }

    public function setUsersLeaving($user) {
        $this->users =
            $this->users->filter(function ($u) use ($user) {
                return $u['id'] != $user['id'];
            });
    }

    public function render() {
        return view('livewire.room.users');
    }
}
