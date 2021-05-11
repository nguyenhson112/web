<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $list = Product::paginate(8);
        //dd($list);
        $typeProduct = ProductType::all();
        return view('frontend.product.index', ['list' => $list, 'typeProduct' => $typeProduct]);
        // return view('frontend.sanpham.index',['list'=>$list]);
    }
    public function indexTypeProduct(Request $request)
    {
        $list = Product::where([['status',1],['product_type',$request->id]])->paginate(8);
        // dd($list);
        $typeProduct = ProductType::all();
        //dd($typeProduct);
        return view('frontend.product.index', ['list' => $list, 'typeProduct' => $typeProduct]);
    }
}
