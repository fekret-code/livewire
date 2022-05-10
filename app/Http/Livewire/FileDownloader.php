<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class FileDownloader extends Component
{
    public function render()
    {
        return view('livewire.file-downloader');
    }
    public function downloadIt(){
        return Storage::disk('cloud')->download('photos\6gG0r191taNWG1s9LkR0N1zlMq8CAjxofbz6zszihC8PAOUY5TLI2nN8Z2qG-photo.png');
    }
}
