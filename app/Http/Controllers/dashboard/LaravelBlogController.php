<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;





class LaravelBlogController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $blogs = DB::table('blogs')->select('id','title','created_at')->get();
        return view('dashboard.pages.laravel.show', compact('blogs'));
    }

    public function create()
    {
       
        $group_blogs = DB::table('group_blogs')->get();

        return view('dashboard.pages.laravel.form-blog', compact('group_blogs'));
    }


    public function store(Request $request)
    {

        
        $name_group = DB::table('group_blogs')->where('name_group', $request->group_blog)->first('id');
        // dd($name_group->id);
        
        $data = array(
                'title' => $request->title,
                'description' => $request->description,
                'group_blog_id' => $name_group->id,
            );
    
        // DB::table('blogs')->insert($data);
        Blog::create($data);


        return redirect('table/laravel');
    }

    
    public function show($id)
    {
        // return 
    }

    public function edit($id)
    {
        return "edit";
    }




}
