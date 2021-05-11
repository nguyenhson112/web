<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function create()
    {
        $giohang = session('giohang');
        if (!$giohang)
            return redirect()->route('cart.index');
        return view('frontend.order.index', ['giohang' => $giohang, 'total' => 0]);
    }
    public function store(Request $request)
    {
        // Mail::send('frontend.order.templateorder', ['order' => '12234356'], function ($message) use ($request) {
        //     //$message->from('john@johndoe.com', 'John Doe');
        //     // $message->sender('john@johndoe.com', 'John Doe');
        //     $message->to($request->email, 'admin');
        //     // $message->cc('john@johndoe.com', 'John Doe');
        //     // $message->bcc('john@johndoe.com', 'John Doe');
        //     // $message->replyTo('john@johndoe.com', 'John Doe');
        //     $message->subject($request->tieude);
        //     //$message->priority(3);
        //     //$message->attach('pathToFile');
        // });
        $giohang = session('giohang');
        if (!$giohang)
            return redirect()->route('cart.index');
        //dd($request->all());
        $order = new Order();
        $order->id_user = Auth::user()->id;
        $order->order_number = time();
        $order->setday = now();
        $order->subtotal = 0;
        $order->feeshipping = 0;
        $order->order_status = 1;
        $order->status = 1;
        $order->created_at = now();
        $order->name = $request->ho . ' ' . $request->ten;
        $order->phone = $request->phone;
        $order->email = $request->email;
        $order->address = $request->address;
        $order->note = $request->note;
        $order->receiver_name = $request->nhan_ho ? $request->nhan_ho . ' ' . $request->nhan_ten : $request->ho . ' ' . $request->ten;
        $order->receiver_phone = $request->nhan_phone ? $request->nhan_phone : $request->phone;
        $order->receiver_email = $request->nhan_email ? $request->nhan_email : $request->email;
        $order->receiver_address = $request->nhan_address ? $request->nhan_address : $request->address;
        $ho = $_POST['ho'];
        $ten = $_POST['ten'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        if ($ho == "" || $ten == "" || $email == "" || $phone == "" || $address == "" || ctype_space($ho) || ctype_space($ten) || ctype_space($email) || ctype_space($phone) || ctype_space($address)) {
            return redirect()->route('order.create')->with(['msg' => 'Vui lòng điền đầy đủ thông tin người mua', 'status' => 'danger']);
        } else {
            if ($order->save()) {
                // ghi chi tiet
                $tong = 0;
                foreach ($giohang as $id => $item) {
                    $tong += $item['qty'] * $item['price'];
                    $detail = new OrderDetail();
                    $detail->order_code = $order->id;
                    $detail->product_code = $id;
                    $detail->quantity = $item['qty'];
                    $detail->price = $item['price'];
                    $detail->sale_off = 0;
                    $detail->status = 1;
                    $detail->save();
                }
                $order->subtotal = $tong;
                $order->save();
                session(['giohang' => []]);
                //tien hanh thong bao cho nguoi mua: giao dien + gui mail
                return redirect()->route('order.done')->with(['msg' => 'Mua thành công', 'status' => 'success', 'ordered' => $order]);
            } else {
                return redirect()->route('order.create')->with(['msg' => 'Xay ra loi', 'status' => 'danger']);
            }
        }
    }
    public function done()
    {
        // $ordered = session('ordered');
        // if (!$ordered)
        //     return redirect()->route('cart.index');
        $listOrder = Order::where('id_user', Auth::user()->id)->get();
        //dd($listOrder);
        return view('frontend.order.order', ['listOrder' => $listOrder]);
    }
}
