<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index($id)
    {

        // $list = DB::table('sanpham')->where('id',$id)->first();
        $list = Product::where('id', $id)->first();
        //dd($list);
        return view('frontend.product.productdetail.index', ['detail' => $list]);
    }
    public function addtocart(Request $request)
    {
        $id = $request->id;
        $quantity = $request->qtybutton;
        $item = Product::where(['status' => 1 ,'id'=> $id])->first();
        if($item)
        {
            //lam tiep
            if($item->quantity > 0 )
            {
                //hung cai gio hang lai
                $giohang = session('giohang');
                if(isset($giohang[$item->id]))
                {
                    $giohang[$item->id]['qty'] += $quantity;
                }else{
                    $giohang[$item->id]=[
                        'id'=>$item->id,
                        'img'=>$item->product_avatar,
                        'name'=>$item->product_name,
                        'price'=>$item->product_price,
                        'stock'=>$item->quantity,
                        'qty' => $quantity
                    ];
                }
                //cap lai ss gio hang
                session(['giohang'=>$giohang]);
                return redirect()->back()->with(['msg'=>'Thêm thành công','status'=>'success']);
            }else{
                return redirect()->back()->with(['msg'=>'Hết hàng','status'=>'error']);
            }
        }else{
            return redirect()->back()->with(['msg'=>'Lỗi server','status'=>'error']);
        }
    }
}
