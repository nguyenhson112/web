<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function index()
    {
        $listUser = User::all();

        return view('backend.UserManagement.userlist', ['listUser' => $listUser]);
    }

    public function indexAdd()
    {
        $dsnhom = DB::select('SELECT * FROM `admingroup` WHERE status = 1');
        //$trangthai = DB::select('SELECT * FROM `users` WHERE 1');
        //dd($trangthai);
        //dd($dsnhom);
        return view('backend.UserManagement.useradd', ['dsnhom' => $dsnhom]);
    }
    public function addUser(Request $request)
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $manhom = $_POST['manhom'];
        $trangthai = $_POST['trangthai'];
        if ($name == "" ||  $email == "" || $password == "" || $manhom == "" || $trangthai == "" || ctype_space($name) || ctype_space($email) || ctype_space($password) || ctype_space($manhom) || ctype_space($trangthai)) {
            return redirect()->back()->with(['msg' => 'Vui lòng nhập đầy đủ thông tin', 'status' => 'danger']);
        } else {
            // kiểm tra email có tồn tại db ko ?
            $quantri = User::where('email', $request->email)->first();
            // dd($user);
            if (empty($quantri)) {
                $image = $request->avatar;
                //dd($request);
                $url = "";
                if ($image != null) {
                    $imageName = time() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('upload'), $imageName);
                    $url = "upload/" . $imageName;
                }
                //dd($url);
                // thêm vào db
                $quantri = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                    'User_avatar' => $url,
                    'status' => $request->trangthai,
                    'group_code' => $request->manhom,
                ]);
                //dd($quantri);
                return redirect()->back()->with(['msg' => 'Thêm thành công', 'status' => 'success']);
            } else {
                return redirect()->back()->with(['msg' => 'Tên đăng nhập đã tồn tại', 'status' => 'danger']);
            }
        }
    }
    public function indexEdit(Request $request, $id)
    {
        if ($id) {
            $listUser = User::find($id);
            $dsnhom = DB::select('SELECT * FROM `admingroup` WHERE status = 1');
            if ($listUser) {
                //dd($listUser);
                return view('backend.UserManagement.useredit', compact(['listUser', 'dsnhom']));
            } else {
                return redirect()->route('dashboard')->with(['msg' => 'Không tìm thấy trang', 'status' => 'danger']);
            }
        } else {
            return redirect()->back()->with(['msg' => 'Trang không tìm thấy', 'status' => 'danger']);
        }
    }
    public function postEdit(Request $request)
    {

        $name = $_POST['name'];
        $password = $_POST['password'];
        $manhom = $_POST['manhom'];
        $trangthai = $_POST['trangthai'];
        if (ctype_space($password)) {
            return redirect()->back()->with(['msg' => 'Mật khẩu không được chứa khoảng trắng', 'status' => 'danger']);
        } elseif ($name == "" ||  $password = "" ||  $manhom == "" ||  $trangthai == "" || ctype_space($name)) {
            return redirect()->back()->with(['msg' => 'Vui lòng nhập và chọn đầy đủ thông tin', 'status' => 'danger']);
        } else {
            $quantri = User::find($request->id);
            $quantri->name = $request->name;
            $quantri->password = bcrypt($request->password);
            $quantri->group_code = $request->manhom;
            $quantri->status = $request->trangthai;
            if ($request->avatar != '') {
                // $path = public_path() . '/upload';
                // //dd($path);
                // //code for remove old file
                // if ($productType->avatar != ''  && $productType->avatar != null) {
                //     $file_old = $path . $productType->avatar;
                //     unlink($file_old);
                // }

                //upload new file
                $image = $request->avatar;
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('upload'), $imageName);
                $url = "upload/" . $imageName;
                //for update in table
                $quantri->update(['User_avatar' => $url]);
            }
            $quantri->save();
            return redirect()->route('User')->with(['msg' => 'Sửa thành công', 'status' => 'success']);
        }
    }
    public function deleteUser($id)
    {
        $list = User::find($id);
        $list->delete();
        return redirect()->route('User')->with(['msg' => 'Xóa thành công', 'status' => 'success']);
    }
}
