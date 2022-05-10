<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostsList extends Component
{
    use WithPagination;
    public $search = '';
    protected $paginationTheme = 'bootstrap';
    public function updatingSearch(){
        $this->resetPage();
    }
    public function paginationView()
    {
        return 'vendor.livewire.bootstrap';
    }

    public function render()
    {
        return view('livewire.posts-list',[
            'posts'=>Post::query()->where('title','LIKE','%'.$this->search.'%')
            ->orderByDesc('id')->paginate(10,['*'],'newPosts'),
            'oldPosts'=>Post::query()->where('title','LIKE','%'.$this->search.'%')
                ->paginate(10,['*'],'oldPosts'),
        ]);
    }
}
