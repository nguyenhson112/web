<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\ProductType;
use File;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    public function index()
    {
        $listProductType = ProductType::all();
        return view('backend.TypManagement.typelist', ['listProductType' => $listProductType]);
    }
    public function indexType()
    {
        return view('backend.TypManagement.typeadd');
    }
    public function addType(Request $request)
    {
        $name = $_POST['name'];
        $mota = $_POST['mota'];
        if ($name == "" || $mota == "" || ctype_space($name) || ctype_space($mota)) {
            return redirect()->route('addType')->with(['msg' => 'Vui lòng nhập đầy đủ thông tin', 'status' => 'danger']);
        } else {
            $loaisp = ProductType::where('type_name', $request->name)->first();
            //dd($loaisp);
            if (empty($loaisp)) {
                $image = $request->avatar;
                // dd($request);
                $url = "";
                if ($image != null) {
                    $imageName = time() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('upload'), $imageName);
                    $url = "upload/" . $imageName;
                    //dd($url);
                }
                // thêm vào db
                $loaisp = ProductType::create([
                    'type_name' => $request->name,
                    'type_description' => $request->mota,
                    'type_avatar' => $url,
                ]);
                return redirect()->route('addType')->with(['msg' => 'Thêm thành công', 'status' => 'success']);
                //dd($quantri);
            } else {
                return redirect()->back()->with(['msg' => 'Tên loại đã tồn tại', 'status' => 'danger']);
            }
        }
    }
    public function indexEdit(Request $request, $id)
    {
        if ($id) {
            $listProductType = ProductType::find($id);
            if ($listProductType) {
                //dd($listUser);
                return view('backend.TypManagement.typeedit', compact(['listProductType']));
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
        $description = $_POST['description'];
        if ($name == "" || ctype_space($name)) {
            return redirect()->back()->with(['msg' => 'Vui lòng nhập tên loại', 'status' => 'danger']);
        } else {
            $productType = ProductType::updateOrCreate(['id' => $request->id], [
                'type_name'  => $request->name,
                'type_description'  => $request->description,
                //Cách 2:create
                // $productType = ProductType::find($request->id);
                // $productType->type_name = $request->name;
                // $productType->type_description = $request->description;
            ]);
            // dd($productType);
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
                $productType->update(['type_avatar' => $url]);
            }
            $productType->save();
            return redirect()->route('ProductType')->with(['msg' => 'Sửa thành công', 'status' => 'success']);
        }
    }
    public function deleteType($id)
    {
        $list = ProductType::find($id);
        $list->delete();
        return redirect()->route('ProductType')->with(['msg' => 'Xóa thành công', 'status' => 'success']);
    }
}
