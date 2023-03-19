<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function index()
    {
        $blogs = Blog::get();
        return view(
            'blogs.index',
            compact('blogs')
        );
    }
}
