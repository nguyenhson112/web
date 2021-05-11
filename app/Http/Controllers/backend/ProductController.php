<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $listProduct = Product::all();
        return view('backend.ProManagement.productlist', ['listProduct' => $listProduct]);
    }
    public function indexProduct()
    {
        $ncc = DB::select('SELECT * FROM `supplier` WHERE status = 1');
        $maloai = DB::select('SELECT * FROM `producttype` WHERE status = 1');
        //dd($maloai);
        return view('backend.ProManagement.productadd', ['maloai' => $maloai, 'ncc' => $ncc]);
    }
    public function addProduct(Request $request)
    {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $quantity = $_POST['quantity'];
        $idncc = $_POST['idncc'];
        $idtype = $_POST['idtype'];
        if ($name == "" || $price == "" || $quantity == "" || $idncc == "" || $idtype == "" || $description == "" || ctype_space($name) || ctype_space($price) || ctype_space($quantity) || ctype_space($idncc) || ctype_space($idtype) || ctype_space($description)) {
            return redirect()->route('addProduct')->with(['msg' => 'Vui lòng nhập đầy đủ thông tin', 'status' => 'danger']);
        } else {
            $product = Product::where('product_name', $request->name)->first();
            if (empty($product)) {
                $image = $request->avatar;
                //dd($request);
                $url = "";
                if ($image != null) {
                    $imageName = time() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('upload'), $imageName);
                    $url = "upload/" . $imageName;
                }
                // thêm vào db
                $product = Product::create([
                    'product_name' => $request->name,
                    'product_price' => $request->price,
                    'product_description' => $request->description,
                    'product_avatar' => $url,
                    'product_supplier' => $request->idncc,
                    'product_type' => $request->idtype,
                    'quantity' => $request->quantity,
                ]);
                //dd($product);
                return redirect()->route('addProduct')->with(['msg' => 'Thêm thành công', 'status' => 'success']);
                //dd($product);
            } else {
                return redirect()->back()->with(['msg' => 'Tên sản phẩm đã tồn tại', 'status' => 'danger']);
            }
        }
    }
    public function indexEdit(Request $request, $id)
    {
        if ($id) {
            $listProduct = Product::find($id);
            //dd($listProduct);
            $ncc = DB::select('SELECT * FROM `supplier` WHERE status = 1');
            $maloai = DB::select('SELECT * FROM `producttype` WHERE status = 1');
            if ($listProduct) {
                //dd($listUser);
                return view('backend.ProManagement.productedit', compact(['listProduct', 'ncc', 'maloai']));
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
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $idtype = $_POST['idtype'];
        $idncc = $_POST['idncc'];
        $description = $_POST['description'];
        if ($name == "" || $price == "" || $quantity == "" || $idtype == "" || $idncc == "" || $description == "" || ctype_space($name) || ctype_space($price) || ctype_space($quantity) || ctype_space($idncc) || ctype_space($idtype) || ctype_space($description)) {
            return redirect()->back()->with(['msg' => 'Vui lòng nhập đầy đủ thông tin', 'status' => 'danger']);
        } else {

            $product = Product::find($request->id);
            $product->product_name = $request->name;
            $product->product_price = $request->price;
            $product->quantity = $request->quantity;
            $product->product_type = $request->idtype;
            $product->product_supplier = $request->idncc;
            $product->product_description = $request->description;
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
                $product->update(['product_avatar' => $url]);
            }
            $product->save();
            return redirect()->route('product')->with(['msg' => 'Sửa thành công', 'status' => 'success']);
        }
    }
    public function deleteProduct($id)
    {
        $list = Product::find($id);
        $list->delete();
        return redirect()->route('product')->with(['msg' => 'Xóa thành công', 'status' => 'success']);
    }
}

