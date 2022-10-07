<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogLaravelController extends Controller
{
    public function index()
    {
        return view('pages.blog.laravel.show-blog-laravel');
    }
}
