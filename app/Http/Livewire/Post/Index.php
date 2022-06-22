<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;
use App\models\Post;
// use livewire\WithPagination;

class Index extends Component
{
    // use WithPagination;

    public function render()
    {
        return view('livewire.post.index', [
            'posts' => Post::latest()->paginate(5)
        ]);
    }

}
