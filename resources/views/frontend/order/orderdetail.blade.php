{{-- {{dd($ordered)}} --}}
@extends('frontend.layout.layout')
@section('content')
<div class="ht__bradcaump__area"
    style="background: rgba(0, 0, 0, 0) url({{ asset('frontend') }}/images/bg/2.jpg) no-repeat scroll center center / cover ;">
    <div class="ht__bradcaump__wrap">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="bradcaump__inner text-center">
                        <h2 class="bradcaump-title">Chi tiết đơn hàng</h2>
                        <nav class="bradcaump-inner">
                            <a class="breadcrumb-item" href="{{route('home')}}">Home</a>
                            <span class="brd-separetor">/</span>
                            <span class="breadcrumb-item active">Chi tiết đơn hàng</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<!-- cart-main-area start -->
<div class="cart-main-area ptb--120 bg__white">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <form action="#">
                    <div class="table-content table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th class="product-thumbnail">Hình</th>
                                    <th class="product-name">Tên sản phẩm</th>
                                    <th class="product-price">Giá</th>
                                    <th class="product-quantity">Số lượng</th>
                                    <th class="product-subtotal">Thành tiền</th>
                                    {{-- <th class="product-remove">Remove</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $total = 0;
                                @endphp
                                @foreach ($orderDetail as $item)
                                @php
                                $total += $item->product->product_price * $item->quantity;
                                @endphp
                                <tr>
                                    <td class="product-thumbnail"><a href="#"><img
                                                src="<?=$item->product->product_avatar?asset($item->product->product_avatar):asset('upload/no-image.png') ?>"
                                                alt="product img" /></a></td>
                                    <td class="product-name"><a href="{{route('detail',$item->product->id)}}">{{$item->product->product_name}}</a></td>
                                    <td class="product-price"><span
                                            class="amount">{{number_format($item->product->product_price)}}đ</span></td>
                                    <td class="product-quantity"><input type="number" disabled
                                            value="{{$item->quantity}}" /></td>
                                    <td class="product-subtotal">
                                        {{number_format($item->product->product_price * $item->quantity)}}đ</td>
                                    {{-- <td class="product-remove"><a href="#">X</a></td> --}}
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-7 col-xs-12">
                            <div class="coupon">
                                @foreach ($listOrder as $item)
                               <div>
                                <h3 class="btn btn-primary">Tên</h3>:
                                {{$item->name}}
                               </div>
                                <div>
                                    <p class="btn btn-primary">Số điện thoại</p>:
                                    {{$item->phone}}
                                </div>
                                <div>
                                    <h3 class="btn btn-primary">Địa chỉ người mua</h3>:
                                    {{$item->address}}
                                </div>
                                <div>
                                    <h3 class="btn btn-primary">Địa chỉ người nhận(nếu có)</h3>:
                                    {{$item->receiver_address}}
                                </div>
                                <div>
                                    <h3 class="btn btn-primary">Ghi chú(nếu có)</h3>:
                                    {{$item->note}}
                                </div>
                                @endforeach
                            </div>
                        </div>
                    <div class="col-md-4 col-sm-5 col-xs-12">
                        <div class="cart_totals">
                            {{-- <h2>Cart Totals</h2> --}}
                            <table>
                                <tbody>
                                    {{-- <tr class="cart-subtotal">
                                            <th>Subtotal</th>
                                            <td><span class="amount">{{$total}}</span></td>
                                    </tr> --}}
                                    {{-- <tr class="shipping">
                                            <th>Shipping</th>
                                            <td>
                                                <ul id="shipping_method">
                                                    <li>
                                                        <input type="radio" />
                                                        <label>
                                                            Flat Rate: <span class="amount">£7.00</span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" />
                                                        <label>
                                                            Free Shipping
                                                        </label>
                                                    </li>
                                                    <li></li>
                                                </ul>
                                                <p><a class="shipping-calculator-button" href="#">Calculate Shipping</a></p>
                                            </td>
                                        </tr> --}}
                                    <tr class="order-total">
                                        <th class="text-primary">Tổng tiền phải trả:</th>
                                        <td>
                                            <strong><span class="amount">{{number_format($total)}}đ</span></strong>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                            <div class="wc-proceed-to-checkout">
                                <a href="{{route('home')}}">Quay lại trang chủ</a>
                            </div>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
