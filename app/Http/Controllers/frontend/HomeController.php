<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use DB;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //hien thi trang chu
    public function index()
    {
        $list = DB::table('product')->where('product_price', '>', 5000000)
            //->take(3)
            ->get();
        //dd($list);
        $data = ['list' => $list];
        return view('frontend.layout.home', $data);
    }
}
