<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        $list=User::all();
        //dd($list);
        return view('backend.login.login',['list' => $list]);
    }
    public function postLogin(Request $request){
        $arr = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        //dd($arr);

        if (Auth::attempt($arr)) {
            //dd($arr);
            return redirect()->route('dashboard')->with('success', 'Đăng nhập thành công');
        } else {
            return  redirect()->back()->with(['msg' => 'Email or Password không chính xác', 'status' => 'danger']);
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
    // public function indexRegister(){
    //     return view('admin.register');
    // }
    // public function postRegister(Request $request){
    //     $data['name']=$request->name;
    //     $data['email']=$request->email;
    //     $data['password']=$request->password;

    //     if(strlen($data['name'])==0){
    //         return  redirect()->back()->with('error', 'Bạn chưa nhập tên');
    //     }
    //     else if(!checkEmail($data['email'])){
    //         return  redirect()->back()->with('error', 'Email không hợp lệ');
    //     }
    //     else if(strlen($data['password'])<6){
    //         return  redirect()->back()->with('error', 'Mật khẩu phải lớn hơn 6 kí tự');
    //     }
    //     else if( $data['password'] !== $request->retype_password){
    //         return  redirect()->back()->with('error', 'Xác nhận mật khẩu không hợp lệ');
    //     }
    //     else{
    //         $data['password']=bcrypt($data['password']);
    //         $user=User::where("email","=",$data['email'])->get()->first();
    //         if(!$user)
    //         {
    //             $user = User::create($data);
    //             return redirect()->route('indexLoginAdmin')->with('success', 'Đăng kí thành công');
    //         }
    //         else{
    //             return Redirect::back()->with('error', 'Tài khoản này đã tồn tại trong hệ thống');
    //         }


    //     }

    // }
    // public function logout(){
    //     Auth::logout();
    //     return redirect()->route('indexHome');
    // }
}
