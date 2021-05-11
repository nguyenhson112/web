<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterClientController extends Controller
{
    public function Register(){
        return view('frontend.login.register');
    }
    public function postRegister(Request $request)
    {
        // check validation


        // kiểm tra email có tồn tại db ko ?
        $user = User::where('email', $request->email)->first();
        if (empty($user)) {

            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            if ($name == "" || $email == "" || $password == "" || ctype_space($name) || ctype_space($email) || ctype_space($password)) {
                return redirect()->route('registerClient')->with(['msg' => 'Vui lòng nhập đầy đủ thông tin', 'status' => 'danger']);
             } else {
                // thêm vào db
                $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),

                ]);
                return redirect()->route('registerClient')->with(['msg' => 'Thêm thành công', 'status' => 'success']);
            }
        } else {
            return redirect()->route('registerClient')->with(['msg' => 'Email đã tồn tại trong hệ thống', 'status' => 'danger']);
        }


        //dd($quantri);

    }
}
