<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class BlogLaravelController extends Controller
{
    public function index()
    {

        $blogs = DB::table('blogs')->get(['id','title']);
        // dd($blogs);

        return view('pages.blog.laravel.showList-blog-laravel', compact('blogs'));
    }

    public function showBlog($id) 
    {
        $blog = DB::table('blogs')->where('id', $id)->get();
        // $date = $blog[0]->created_at->format('d-m-Y');
        // dd($date);
        
        // dd($blog);

        return view('pages.blog.laravel.ShowBlog', compact('blog'));
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
