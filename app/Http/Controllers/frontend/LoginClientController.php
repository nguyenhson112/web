<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class LoginClientController extends Controller
{
    public function login()
    {
        $list=User::all();
        //dd($list);
        return view('frontend.login.login',['list' => $list]);
    }
    public function postLogin(Request $request){
        $arr = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        //dd($arr);

        if (Auth::attempt($arr)) {
            //dd($arr);
            return redirect()->route('home')->with('success', 'Đăng nhập thành công');
        } else {
            return  redirect()->back()->with(['msg' => 'Email or Password không chính xác', 'status' => 'danger']);
        }
    }
    public function logout(){
        Auth::logout();
        session(['giohang' => []]);
        return redirect()->route('loginClient');
    }
    
}
