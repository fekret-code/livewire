<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RegisterForm extends Component
{
    public $name = '';
    public $email = '';
    public $password = '';
    public $successMessage;
    public $successTempMessage;
    public function mount($successMessage = 'تم الاضافة بنجاح'){
        $this->successMessage = '';
        $this->successTempMessage = $successMessage;
    }
    public function render()
    {
        return view('livewire.register-form');
    }
    public function updatedName(){
        $this->successMessage = 'updated name';
    }

    public function submitForm(){
        sleep(1);
        $this->validate([
            'name'  =>  'required',
            'email' =>  'required|email',
            'password' => 'required',
        ]);
        // TODO
        // u can create new user
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->successMessage = $this->successTempMessage ;
    }
}
