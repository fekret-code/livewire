<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $counter = 0;
    public function render()
    {
        return view('livewire.counter');
    }
    public function zyada(){
        $this->counter++;
    }
    public function naqs(){
        $this->counter--;
    }
}
