<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;
use DataTables;






class LaravelBlogController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(Request $request)
    {
        $blogs = DB::table('blogs')->select('id','title','category','created_at')->paginate(15);



        // $blogs = Blog::all('id','title','created_at')->paginate(10);
        // $blogs = Blog::paginate(2,['id','title','created_at']);
        // dd($blogs);

       

        return view('dashboard.pages.laravel.show', compact('blogs'));


   




    }

    public function create()
    {
       
        

        return view('dashboard.pages.laravel.form-blog');
    }


    public function store(Request $request)
    {



        $validator = \Validator::make($request->all(),[
            'title' => 'required|string',
            'description' => 'required|string',
            'category' => 'required|string',
           
        ],
        [
            'title.required'=>'กรุณาใส่ชื่อเรื่อง',
            'description.required'=>'กรุณาใส่เนื้อหา',
            'category.required'=>'กรุณาเลือกหมวดหมู่',
           
        ]);

        //ถ้า validate ไม่ผ่านให้ส่ง error ไป  แต่ถ้าผ่านให้ทำการบันทึกข้อมูลลง database
        if(!$validator->passes()){
            return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);

        }

        
        $data = array(
                'title' => $request->title,
                'description' => $request->description,
                'category' => $request->category,
            );
    
        // DB::table('blogs')->insert($data);
        Blog::create($data);


        // return redirect('table/laravel');
        return response()->json(['code'=>1,'msg'=>'ได้ทำการเพิ่มข้อมูลเรียบร้อยแล้ว']);
    }

    
    public function show($id)
    {
        // return 
    }

    public function edit($id)
    {

        $blog = Blog::find($id);
        // dd($blog);
        return view('dashboard.pages.laravel.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {

        $validator = \Validator::make($request->all(),[
            'title' => 'required|string',
            'description' => 'required|string',
            'category' => 'required|string',
           
        ],
        [
            'title.required'=>'กรุณาใส่ชื่อเรื่อง',
            'description.required'=>'กรุณาใส่เนื้อหา',
            'category.required'=>'กรุณาเลือกหมวดหมู่',
           
        ]);

        //ถ้า validate ไม่ผ่านให้ส่ง error ไป  แต่ถ้าผ่านให้ทำการบันทึกข้อมูลลง database
        if(!$validator->passes()){
            return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);

        }


        $data = array(
            'title' => $request->title,
            'description' => $request->description,
            'category' => $request->category
        );

        $updated = Blog::where('id',$id)->update($data);

        return response()->json(['code'=>1,'msg'=>'ได้ทำการแก้ไขข้อมูลเรียบร้อยแล้ว']);



    }


    public function destroy(Request $request)
    {
       


        // return 'delete data';

        $data = Blog::where('id',$request->id)->delete();
        if($data){
            return response()->json(['code'=>1,'msg'=>'ได้ทำการลบข้อมูลเรียบร้อยแล้ว']);
        }else{
            return response()->json(['code'=>0,'msg'=>'ลบข้อมูลไม่สำเร็จ']);
            
        }

        // return response()->json(['code'=>1,'msg'=>'ได้ทำการลบข้อมูลเรียบร้อยแล้ว']);
        // return response('Post deleted successfully.', 200);

        // return $employees;

    }




    public function search(Request $request)
    {

        // dd($request->show);
        // return $request->show;
        if($request->ajax())
        {
            $output="";
            $blogs=DB::table('blogs')->where('title','LIKE','%'.$request->search."%")->select('id','title','category','created_at')->paginate(15);
            
            // return $blogs;
            if($blogs)
            {
                foreach ($blogs as $key => $blog) {
                    $output.='<tr>'.
                    '<td>'.$blog->id.'</td>'.
                    // '<td>'.$blog->title.'</td>'.
                    '<td>'.'<a'.' '.'href="'.url('showBlog/'.$blog->id).'"target="_bank">'.$blog->title. '</a>'.'</td>'.
                    '<td>'.$blog->category.'</td>'.
                    '<td>'. \Carbon\Carbon::parse($blog->created_at)->format('d/m/Y').'</td>'.
                    '<td>'.
                        '<a'.' '.'href="'.url('blog/laravel/edit/'.$blog->id).'"title="Edit">'.
                        '<i class="ti-pencil-alt pr-3 text-warning"></i>'.
                        '</a>'.

                        '<a'.' '.'href="#" data-id="'.$blog->id.'" id="deleteBtn" title="Delete">'.
                        '<i class="ti-trash text-danger"></i>'.
                        '</a>'.
                        
                    '</td>'.
                    // '<td>'.$product->description.'</td>'.
                    '</tr>';
                }
                return $output;
                // Response($output);
            }
        }
        
    }




}
