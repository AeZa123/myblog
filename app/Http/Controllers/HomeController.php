<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;

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


    public function blogLavavel(Request $request)
    {
        // dd($request);
        $blogName = "Laravel";

        $blogs = DB::table('blogs')
                ->join('categories', 'blogs.category_id', '=', 'categories.id')
                ->join('users', 'blogs.user_id', '=', 'users.id')
                ->where('categories.name_category', $blogName)
                ->select('blogs.id', 'blogs.title', 'blogs.created_at', 'categories.name_category', 'users.name')
                ->orderByDesc('blogs.created_at')
                ->paginate(10);
        // dd($blogs);


       
        // $blogs = Blog::where('category', $blogName)->orderByDesc('created_at')->paginate(10);

        if($request->ajax()){
            $view = view('pages.blog.laravel.data', compact('blogName','blogs'))->render();
            return response()->json(['html' => $view]);
        }
         
        return view('pages.blog.laravel.showList-blog-laravel', compact('blogName','blogs'));

    }

    public function blogHtml(){

        $blogs = DB::table('blogs')->where('category', 'HTML')->select('id','title', 'category', 'created_at')->orderByDesc('created_at')->paginate(10);
        $blogName = "HTML";

        return view('pages.blog.laravel.showList-blog-laravel', compact('blogs','blogName'));
    }

    public function showBlog($id) 
    {
        // dd($id);
        $blog = DB::table('blogs')->where('id', $id)->get();
        // $date = $blog[0]->created_at->format('d-m-Y');
        // dd($date);
        
        // dd($blog);

        return view('pages.blog.laravel.ShowBlog', compact('blog'));
    }

    public function search(Request $request)
    {

        if($request->ajax())
        {
            if($request->search == ''){
                $output="";
                $blogs=DB::table('blogs')
                        ->join('categories', 'blogs.category_id', '=', 'categories.id')
                        ->where('categories.name_category', $request->blogName)
                        ->select('blogs.id','blogs.title','categories.name_category','blogs.created_at')
                        ->orderByDesc('blogs.created_at')
                        ->paginate(20);
                
            }else{
                $output="";
                $blogs=DB::table('blogs')
                        ->join('categories', 'blogs.category_id', '=', 'categories.id')
                        ->where('blogs.title','LIKE','%'.$request->search."%")   
                        ->select('blogs.id','blogs.title','categories.name_category','blogs.created_at')
                        ->get();
            }
            
            // return $blogs;
            if($blogs)
            {
                foreach($blogs as $key => $blog){
                    // $output.='<ul class="list-group">'.'<a class="a display-6"'.'href="'.url('showBlog/'.$blog->id).'"target="_bank">'.
                    // '<li class="list-group-item mb-2 li">'.$blog->title.'<p style="font-size: 15px;">สร้างเมื่อ'.\Carbon\Carbon::parse($blog->created_at)->format('d/m/Y').'</p>' .'</li>'.'</a>'.
                    // '</ul>';


                    $output.='<div class="col-md-6 col-sm-12 ">'.
                    '<a class="a"'.'href="'.url('showBlog/'.$blog->id).'"target="_bank">'.
                        '<div class="card hover-blog">
                            <div class="card-body">
                              <h5 class="card-title">เรื่อง:'.' '. $blog->title.'</h5>
                              <h6 class="card-subtitle mb-2">เนื้อหา:'.' '. $blog->name_category.'</h6>
                              
                              สร้างเมื่อ:'.' '.\Carbon\Carbon::parse($blog->created_at)->format('d/m/Y'). '<br>
                
                            </div>
                        </div>
                    </a>
                    </div>';

                }
                return $output;
            }
        }
        
    }



   
    

    


}
