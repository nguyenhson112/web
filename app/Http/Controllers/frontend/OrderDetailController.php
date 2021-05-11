<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Auth;
use Illuminate\Http\Request;
use App\Models\OrderDetail;
class OrderDetailController extends Controller
{
    public function orderdetail($id)
    {
        $orderDetail = OrderDetail::where("order_code", $id)->get();
        $listOrder= Order::where('id',$id)->get();
        //dd( $listOrder);
        //dd($orderDetail);
        return view('frontend.order.orderdetail', ['orderDetail' => $orderDetail],['listOrder' => $listOrder]);
    }
}
