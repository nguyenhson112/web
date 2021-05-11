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
                        <h2 class="bradcaump-title">Thông tin</h2>
                        <nav class="bradcaump-inner">
                            <a class="breadcrumb-item" href="{{route('home')}}">Home</a>
                            <span class="brd-separetor">/</span>
                            <span class="breadcrumb-item active">Thông tin đơn hàng</span>
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
            @if(session('msg'))
            <div class="alert alert-{{session('status')}}" role="alert">
                {{session('msg')}}
            </div>
            @endif
            @foreach ($listOrder as $item)
            <div class="col-md-12 col-sm-12 col-xs-12">
                <form action="#">
                    <div class="table-content table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th class="product-thumbnail">Thông tin đơn hàng</th>
                                    <th class="product-thumbnail"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="product-subtotal">Số đơn hàng</td>
                                    <td class="product-subtotal">{{$item->order_number}}</td>
                                </tr>
                                <tr>
                                    <td class="product-subtotal">Ngày đặt</td>
                                    <td class="product-subtotal">{{$item->created_at}}</td>
                                </tr>
                                <tr>
                                    <td class="product-subtotal">Phí ship</td>
                                    <td class="product-subtotal">{{$item->feeshipping}}</td>
                                </tr>
                                <tr>
                                    <td class="product-subtotal">Tổng thanh toán</td>
                                    <td class="product-subtotal">{{number_format($item->subtotal)}}đ</td>
                                </tr>
                                <tr>
                                    <td class="product-subtotal"></td>
                                    <td class="product-subtotal">
                                        <a href="{{route('order.detail',['id' => $item->id ])}}">Chi tiết</a>
                                    </td>
                                </tr>
                                {{-- <tr>
                                    <td class="product-subtotal">Số đt người mua</td>
                                    <td class="product-subtotal">asd</td>
                                </tr>
                                <tr>
                                    <td class="product-subtotal">Địa chỉ người mua</td>
                                    <td class="product-subtotal">asd</td>
                                </tr>
                                <tr>
                                    <td class="product-subtotal">Tên người nhận</td>
                                    <td class="product-subtotal">asd</td>
                                </tr>
                                <tr>
                                    <td class="product-subtotal">Số đt người nhận</td>
                                    <td class="product-subtotal">asdsad</td>
                                </tr>
                                <tr>
                                    <td class="product-subtotal">Địa chỉ người nhận</td>
                                    <td class="product-subtotal">asd</td>
                                </tr> --}}

                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
            @endforeach
        </div>



        <div class="row">
            <div class="col-md-4 col-sm-5 col-xs-12">
                <div class="wc-proceed-to-checkout">
                    <a href="{{route('home')}}">Quay lại trang chủ</a>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
@endsection
