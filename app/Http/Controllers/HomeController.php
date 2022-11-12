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


    public function blogLavavel()
    {

        $rowperpage['rowperpage'] = $this->rowperpage;

        $totalrecords['totalrecords'] = Blog::select('*')->count();

        
        $blogName = "Laravel";

        $blogs['rowperpage'] = $this->rowperpage;

        $blogs['totalrecords'] = Blog::select('*')->count();
 
        $blogs['blogs'] = Blog::where('category', 'Laravel')
                 ->skip(0)
                 ->take($this->rowperpage)
                 ->select('id','title','created_at')
                //  ->where('category', 'Laravel')
                 ->orderByDesc('created_at')
                 ->get();
        //  dd($blogs);
         
        return view('pages.blog.laravel.showList-blog-laravel', $blogs, compact('blogName'));

        // return view('pages.blog.laravel.showList-blog-laravel', compact('blogs','blogName', 'titlePage',));
    }

    public function blogHtml(){

        $blogs = DB::table('blogs')->where('category', 'HTML')->select('id','title','created_at')->orderByDesc('created_at')->paginate(10);
        $blogName = "Learning HTML";
        $titlePage = "Learning HTML";

        return view('pages.blog.laravel.showList-blog-laravel', compact('blogs','blogName', 'titlePage'));
    }

    public function showBlog($id) 
    {
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
                $blogs=DB::table('blogs')->where('category', $request->blogName)->select('id','title','category','created_at')->orderByDesc('created_at')->paginate(10);
                
            }else{
                $output="";
                $blogs=DB::table('blogs')->where('title','LIKE','%'.$request->search."%")->select('id','title','category','created_at')->get();
            }
            
            // return $blogs;
            if($blogs)
            

            {
                foreach($blogs as $key => $blog){
                    $output.='<ul class="list-group">'.'<a class="a display-6"'.'href="'.url('showBlog/'.$blog->id).'"target="_bank">'.
                    '<li class="list-group-item mb-2 li">'.$blog->title.'<p style="font-size: 15px;">สร้างเมื่อ'.\Carbon\Carbon::parse($blog->created_at)->format('d/m/Y').'</p>' .'</li>'.'</a>'.
                    '</ul>';
                }
                return $output;
            }
        }
        
    }


    //test 

    public $rowperpage = 5;

    public function lazyload(Request $request)
    {
       $data['rowperpage'] = $this->rowperpage;

       $data['totalrecords'] = Blog::select('*')->count();

       $data['blogs'] = Blog::select('*')
                ->skip(0)
                ->take($this->rowperpage)
                ->get();
        // dd($data);
        
        return view('pages.blog.laravel.test', $data);
    }

    //fetch data
    public function getBlogs(Request $request)
    {
        $start = $request->start;

        $records = Blog::select('*')
                ->skip($start)
                ->take($this->rowperpage)
                ->get();

        $html = "";

        foreach($records as $record) {
            // $id = $record["title"];
            // $category = $record["category"];

            $html .= '<ul class="list-group">'.'<a class="a display-6"'.'href="'.url('showBlog/'.$record->id).'"target="_bank">'.
            '<li class="list-group-item mb-2 li">'.$record->title.'<p style="font-size: 15px;">สร้างเมื่อ'.\Carbon\Carbon::parse($record->created_at)->format('d/m/Y').'</p>' .'</li>'.'</a>'.
            '</ul>';

        }

        $data['html'] = $html;

        // dd($data);
        return response()->json($data);

    }


    


}
