<?php

namespace App\Http\Livewire\Blog;

use App\Models\Blog;
use Livewire\Component;

class SinglePostComponent extends Component
{
    public $blog_id;
    public function mount($id)
    {
        $this->blog_id = $id;
    }
    public function render()
    {
        $post = Blog::find($this->blog_id);
        return view('livewire.blog.single-post-component', compact('post'))->layout('layouts.demo');
    }
}
