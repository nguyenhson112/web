@extends('frontend.layout.layout')
@section('content')
       <!-- Start Bradcaump area -->
       <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url({{ asset('frontend') }}/images/bg/2.jpg) no-repeat scroll center center / cover ;">
        <div class="ht__bradcaump__wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">Thanh toán</h2>
                            <nav class="bradcaump-inner">
                              <a class="breadcrumb-item" href="{{route('home')}}">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb-item active">Thanh toán</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- Start Checkout Area -->
    <section class="our-checkout-area ptb--120 bg__white">
        <form method="POST" action="">
            @csrf
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8">
                    <div class="ckeckout-left-sidebar">
                        <!-- Start Checkbox Area -->
                        <div class="checkout-form">
                            <h2 class="section-title-3">Người mua</h2>
                            @if (session('msg'))
                            <div class="alert alert-{{session('status')}}" role="alert">
                                {{session('msg')}}
                            </div>
                            @endif
                            <div class="checkout-form-inner">
                                <div class="single-checkout-box">
                                    <input type="text"  name="ho" placeholder="Họ">
                                    <input type="text"  name="ten" placeholder="Tên">
                                </div>
                                <div class="single-checkout-box">
                                    <input type="email"  name="email" placeholder="Email">
                                    <input type="text"  name="phone" placeholder="Điện thoại">
                                </div>
                                <div class="single-checkout-box">
                                    <textarea name="note" placeholder="Ghi chú"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="address" id="" class="form-control" placeholder="Address" aria-describedby="helpId">
                                </div>
                                <div class="single-checkout-box checkbox">
                                    <input id="remind-me" onchange="if(this.checked==true){$('#nguoinhan-form').removeClass('hidden')}else{$('#nguoinhan-form').addClass('hidden')}" type="checkbox">
                                    <label for="remind-me"><span></span>Người nhận khác người mua ?</label>
                                </div>
                            </div>
                        </div>
                        <div class="checkout-form hidden" id="nguoinhan-form">
                            <h2 class="section-title-3">Người nhận</h2>
                            <div class="checkout-form-inner">
                                <div class="single-checkout-box">
                                    <input type="text" name="nhan_ho" placeholder="Họ">
                                    <input type="text" name="nhan_ten"  placeholder="Tên">
                                </div>
                                <div class="single-checkout-box">
                                    <input type="email" name="nhan_email" placeholder="Email">
                                    <input type="text" name="nhan_phone" placeholder="Điện thoại">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="nhan_address" id="" class="form-control" placeholder="Address" aria-describedby="helpId">
                                </div>
                            </div>
                        </div>
                        <!-- End Checkbox Area -->
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="checkout-right-sidebar">
                        <div class="our-important-note">
                            <h2 class="section-title-3">Giỏ hàng <a class="pull-right" href="{{route('cart.index')}}"><i class="zmdi zmdi-edit"></i></a></h2>
                            <ul class="important-note">
                                @foreach ($giohang as $id=>$item)
                                @php
                                    $tt =$item['price']*$item['qty'];
                                    $total +=$tt;
                                @endphp
                                <li><a style="display:block;" href="#"><i class="zmdi zmdi-caret-right-circle"></i>{{$item['name']}}  x <strong>{{$item['qty']}}</strong></a>
                                    <span style="display:block;text-align:right" class="text-danger">{{number_format($tt)}}</span>
                                </li>
                                @endforeach
                                <li class="text-right"> Tổng thanh toán: <span  class="text-danger">{{number_format($total)}}</span>
                                </li>
                            </ul>
                            <button type="submit"  class="btn btn-success pull-right">Hoàn tất</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </section>
    <!-- End Checkout Area -->

@endsection
