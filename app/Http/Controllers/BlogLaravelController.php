<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;

class BlogLaravelController extends Controller
{
    public function index()
    {

        $blogs = DB::table('blogs')->get('title');

        return view('pages.blog.laravel.show-blog-laravel', compact('blogs'));
    }

    public function createBlog()
    {
        return view('pages.blog.laravel.form-blog');
    }

    public function store(Request $request)
    {
        $blog = $request->all();
        Blog::create($blog);

        return redirect('blog-laravel');
    }
}
