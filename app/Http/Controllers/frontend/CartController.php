<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $giohang = session('giohang');
        // dd($giohang);
        return view('frontend.cart.index', ['giohang' => $giohang, 'total' => 0]);
    }
    public function addtocart($id)
    {
        $item = Product::where(['status'=>1,'id'=>$id])->first();
        if($item)
        {
            //lam tiep
            if($item->quantity>0)
            {
                //lam tiep
                //bo vo gio
                /*
                [
                    key=>[
                        thong tin sp
                    ],
                    key=>[
                        thong tin sp
                    ],
                    key=>[
                        thong tin sp
                    ],
                    key=>[
                        thong tin sp
                    ]
                ]


                */
                //hung cai gio hang lai
                $giohang = session('giohang');
                if(isset($giohang[$item->id]))
                {
                    $giohang[$item->id]['qty']++;
                }else{
                    $giohang[$item->id]=[
                        'id'=>$item->id,
                        'img'=>$item->product_avatar,
                        'name'=>$item->product_name,
                        'price'=>$item->product_price,
                        'stock'=>$item->quantity,
                        'qty'=>1
                    ];
                }
                //cap lai ss gio hang
                session(['giohang'=>$giohang]);
                //dd($giohang);
                return redirect()->back()->with(['msg'=>'Thêm thành công','status'=>'success']);
            }else{
                return redirect()->route('product.list')->with(['msg'=>'Hết hàng','status'=>'danger']);
                //return redirect()->back();
            }
        }else{
            return redirect()->route('product.list')->with(['msg'=>'Du lieu loi','status'=>'danger']);
            //return redirect()->back();
        }
    }
    public function delete($id)
    {

        $giohang = session('giohang');
        unset($giohang[$id]);
        session(['giohang'=>$giohang]);
       // dd(session('giohang'));
        return redirect()->back()->with(['msg'=>'Xoa thanh cong','status'=>'success']);
    }
    public function edit(Request $request)
    {
        if(!is_array($request->qty))
            return redirect()->route('cart.index')->with(['msg'=>'du lieu sai','status'=>'danger']);
        $giohang = session('giohang');
        foreach ($request->qty as $id => $qty) {
            $giohang[$id]['qty'] = $qty;
        }
        session(['giohang'=>$giohang]);
        return redirect()->route('cart.index')->with(['msg'=>'Cap nhat thanh cong','status'=>'success']);
    }
}
