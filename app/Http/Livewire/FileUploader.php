<?php

namespace App\Http\Livewire;

use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class FileUploader extends Component
{
    use WithFileUploads;
    public $photos = [];
    public $successMessage;
    public function mount(){
        $this->successMessage = '';
    }
    public function render()
    {
        return view('livewire.file-uploader');
    }
    public function submitFile(){
        $this->validate([
            'photos'    =>  'required|array|min:1',
            'photos.*' => 'image',
        ]);
        foreach ($this->photos as $photo){
            $ext = $photo->extension();
            $url = $photo->storeAs('photos',Str::random(60).'-photo.'.$ext,'cloud');
        }
        $this->photos = [];
        $this->successMessage = 'تم الرفع بنجاح';

    }

}
