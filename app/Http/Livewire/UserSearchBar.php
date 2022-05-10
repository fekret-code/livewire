<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserSearchBar extends Component
{
    public $users;
    public $search;
    public function mount(){
        $this->search = '';
        $this->users = collect([
            ['name'=>'ahmed','email'=>'ahmed@dev.com'],
            ['name'=>'mohamed','email'=>'mohamed@dev.com'],
            ['name'=>'yousef','email'=>'yousef@yahoo.com'],
            ['name'=>'omar','email'=>'omar@yahoo.com'],
        ]);
    }
    public function updated(){
//        $search = $this->search;
//        $this->users = $this->users->filter(function ($item) use ($search){
//            return strlen($search) and strpos($item['name'],$search) !== false;
//        });
    }
    public function render()
    {
        return view('livewire.user-search-bar');
    }
}
