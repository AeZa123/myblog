<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function index()
    {
        return view('pages.home');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function service()
    {
        return view('pages.service');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function login()
    {
        return url('login');
    }


    public function blog()
    {

        // $blogs = DB::table('blogs')->get(['id','title'])->paginate(5);
        $blogs = DB::table('blogs')->select('id','title','created_at')->orderByDesc('created_at')->paginate(3);
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
}
