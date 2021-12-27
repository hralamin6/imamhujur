<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::select('id', 'title', 'image')->paginate(100);
        return view('welcome', compact('blogs'));
    }
}
