<?php

namespace App\Http\Livewire\Blog;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithPagination;

class BlogComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $blogs = Blog::select('id', 'title', 'image')->paginate(100);
        return view('livewire.blog.blog-component', compact('blogs'))->layout('layouts.demo');
    }
}
