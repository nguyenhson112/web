@extends('frontend.layout.layout')
@section('content')
<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area"
    style="background: rgba(0, 0, 0, 0) url({{ asset('frontend') }}/images/bg/2.jpg) no-repeat scroll center center / cover ;">
    <div class="ht__bradcaump__wrap">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="bradcaump__inner text-center">
                        <h2 class="bradcaump-title">Giỏ hàng</h2>
                        <nav class="bradcaump-inner">
                            <a class="breadcrumb-item" href="{{route('home')}}">Home</a>
                            <span class="brd-separetor">/</span>
                            <span class="breadcrumb-item active">Giỏ hàng</span>
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
                @if(session('msg'))
                <div class="alert alert-{{session('status')}}" role="alert">
                    {{session('msg')}}
                </div>
                @endif
                @if(session('giohang'))
                <form method="post" action="{{route('cart.edit')}}">
                    @csrf
                    @method('PUT')
                    <div class="table-content table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th class="product-thumbnail">Hình</th>
                                    <th class="product-name">Sản phẩm</th>
                                    <th class="product-price">Giá</th>
                                    <th class="product-quantity">Số lượng</th>
                                    <th class="product-subtotal">Thành tiền</th>
                                    <th class="product-remove"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($giohang as $id=>$item)
                                @php
                                $tt =$item['price']*$item['qty'];
                                $total +=$tt;
                                @endphp
                                <tr>
                                    <td class="product-thumbnail"><a href="#"><img
                                                src="<?=$item['img']?asset($item['img']):asset('upload/no-image.png')?>"
                                                alt="{{$item['name']}}" /></a></td>
                                    <td class="product-name"><a href="#">{{$item['name']}}</a></td>
                                    <td class="product-price"><span
                                            class="amount">{{number_format($item['price'])}}</span></td>
                                    <td class="product-quantity"><input type="number" name="qty[{{$id}}]"
                                            value="{{$item['qty']}}" /></td>
                                    <td class="product-subtotal">{{number_format($tt)}}</td>
                                    <td class="product-remove"><a onclick="return confirm('Bạn ơi có xóa không?')"
                                            href="{{route('cart.delete',$id)}}">X</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-7 col-xs-12">
                            <div class="buttons-cart">
                                <input type="submit" value="Cập nhật giỏ hàng" />
                                <a href="{{route('product.list')}}">Mua tiếp</a>
                            </div>
                            <div class="coupon">
                                <h3>Mã giảm giá</h3>
                                <p>Nhập mã giảm giá</p>
                                <input type="text" placeholder="Mã" />
                                <input type="submit" value="Áp dụng" />
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-5 col-xs-12">
                            <div class="cart_totals">
                                <h2>Giỏ hàng của bạn</h2>
                                <table>
                                    <tbody>
                                        <tr class="cart-subtotal">
                                            <th>Tạm tính</th>
                                            <td><span class="amount">{{number_format($total)}}</span></td>
                                        </tr>
                                        <tr class="shipping">
                                            <th>Phí vận chuyển</th>
                                            <td>
                                                <ul id="shipping_method">
                                                    <li>
                                                        <input type="radio" />
                                                        <label>
                                                            Miễn phí
                                                        </label>
                                                    </li>
                                                    <li></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Tổng tiền</th>
                                            <td>
                                                <strong><span class="amount">{{number_format($total)}}</span></strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="wc-proceed-to-checkout">
                                    <a href="{{route('order.create')}}">Tiến hành thanh toán</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                @else
                <div class="text-center">
                    <img src="https://salt.tikicdn.com/desktop/img/mascot@2x.png" /><br>
                    <a href="{{route('product.list')}}" class="btn btn-sm btn-success">Tiếp tục mua hàng</a>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
<!-- cart-main-area end -->

@endsection
