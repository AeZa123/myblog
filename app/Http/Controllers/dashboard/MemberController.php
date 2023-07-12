<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\UserRole;

class MemberController extends Controller
{
    
    public function index()
    {

        $members = DB::table('users')
                    ->join('user_roles', 'users.user_role_id', '=', 'user_roles.id')
                    ->select('users.*', 'user_roles.name_role')
                    ->paginate(10);

        $roles = UserRole::all();

        return view('dashboard.pages.members.showMember', compact('members', 'roles'));
    }


    public function stroe(Request $request)
    {  

        // dd($request);
        // return response()->json(['code'=>1,'msg'=>'ได้ทำการเพิ่มข้อมูลเรียบร้อยแล้ว']);

        $validator = \Validator::make($request->all(),[
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed',
            // 'password_confirmation'=>'required|string'
           
        ],
        [
            'name.required'=>'กรุณาใส่ชื่อนาม-สกุล',
            'email.required'=>'กรุณาใส่อีเมล',
            'password.required'=>'กรุณาใส่รหัสผ่าน',
            'password.confirmed'=>'รหัสผ่านไม่ตรงกัน',
            // 'password_confirmation.required'=>'กรุณายืนยันรหัสผ่าน'
        ],);

        //ถ้า validate ไม่ผ่านให้ส่ง error ไป  แต่ถ้าผ่านให้ทำการบันทึกข้อมูลลง database
        if(!$validator->passes()){
            return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);

        }

        return response()->json(['code'=>1,'msg'=>'ได้ทำการเพิ่มข้อมูลเรียบร้อยแล้ว']);



    }

}
