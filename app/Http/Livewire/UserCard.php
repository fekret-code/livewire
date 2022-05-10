<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserCard extends Component
{
    public $user;
    public function mount($user){
        $this->user = $user;
    }
    public function render()
    {
        return view('livewire.user-card');
    }
}
