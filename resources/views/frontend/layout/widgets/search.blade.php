<!-- Start Offset Wrapper -->
<div class="offset__wrapper">
    <!-- Start Search Popap -->
    <div class="search__area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="search__inner">
                        <form action="#" method="get">
                            <input placeholder="Search here... " type="text">
                            <button type="submit"></button>
                        </form>
                        <div class="search__close__btn">
                            <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Search Popap -->
    <!-- Start Offset MEnu -->
    <div class="offsetmenu">
        <div class="offsetmenu__inner">
            <div class="offsetmenu__close__btn">
                <a href="#"><i class="zmdi zmdi-close"></i></a>
            </div>
            <div class="off__contact">
                <div class="logo">
                    <a href="index.html">
                        <img src="{{ asset('frontend') }}/images/logo/logo.png" alt="logo">
                    </a>
                </div>
                <p>Lorem ipsum dolor sit amet consectetu adipisicing elit sed do eiusmod tempor incididunt ut labore.
                </p>
            </div>
            <ul class="sidebar__thumd">
                <li><a href="#"><img src="{{ asset('frontend') }}/images/sidebar-img/1.jpg"
                            alt="sidebar images"></a></li>
                <li><a href="#"><img src="{{ asset('frontend') }}/images/sidebar-img/2.jpg"
                            alt="sidebar images"></a></li>
                <li><a href="#"><img src="{{ asset('frontend') }}/images/sidebar-img/3.jpg"
                            alt="sidebar images"></a></li>
                <li><a href="#"><img src="{{ asset('frontend') }}/images/sidebar-img/4.jpg"
                            alt="sidebar images"></a></li>
                <li><a href="#"><img src="{{ asset('frontend') }}/images/sidebar-img/5.jpg"
                            alt="sidebar images"></a></li>
                <li><a href="#"><img src="{{ asset('frontend') }}/images/sidebar-img/6.jpg"
                            alt="sidebar images"></a></li>
                <li><a href="#"><img src="{{ asset('frontend') }}/images/sidebar-img/7.jpg"
                            alt="sidebar images"></a></li>
                <li><a href="#"><img src="{{ asset('frontend') }}/images/sidebar-img/8.jpg"
                            alt="sidebar images"></a></li>
            </ul>
            <div class="offset__widget">
                <div class="offset__single">
                    <h4 class="offset__title">Language</h4>
                    <ul>
                        <li><a href="#"> Engish </a></li>
                        <li><a href="#"> French </a></li>
                        <li><a href="#"> German </a></li>
                    </ul>
                </div>
                <div class="offset__single">
                    <h4 class="offset__title">Currencies</h4>
                    <ul>
                        <li><a href="#"> USD : Dollar </a></li>
                        <li><a href="#"> EUR : Euro </a></li>
                        <li><a href="#"> POU : Pound </a></li>
                    </ul>
                </div>
            </div>
            <div class="offset__sosial__share">
                <h4 class="offset__title">Follow Us On Social</h4>
                <ul class="off__soaial__link">
                    <li><a class="bg--twitter" href="#" title="Twitter"><i class="zmdi zmdi-twitter"></i></a></li>

                    <li><a class="bg--instagram" href="#" title="Instagram"><i class="zmdi zmdi-instagram"></i></a></li>

                    <li><a class="bg--facebook" href="#" title="Facebook"><i class="zmdi zmdi-facebook"></i></a></li>

                    <li><a class="bg--googleplus" href="#" title="Google Plus"><i class="zmdi zmdi-google-plus"></i></a>
                    </li>

                    <li><a class="bg--google" href="#" title="Google"><i class="zmdi zmdi-google"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Offset MEnu -->
    <!-- Start Cart Panel -->
    <div class="shopping__cart">
        <div class="shopping__cart__inner">

            <div class="offsetmenu__close__btn">
                <a href="#"><i class="zmdi zmdi-close"></i></a>
            </div>
            <div class="shp__cart__wrap">
                @php
                $giohang = session('giohang');
                $total = 0;
                if($giohang == null){
                $giohang = [];
                }
                @endphp

                @foreach ($giohang as $id=>$item)
                @php
                $total += ($item['price'] * $item['qty']);
                @endphp
                <div class="shp__single__product">
                    <div class="shp__pro__thumb">
                        <a href="#">
                            <img src="{{ asset('frontend') }}/images/product/sm-img/1.jpg" alt="product images">
                        </a>
                    </div>

                    <div class="shp__pro__details">
                        <h2><a href="product-details.html">{{$item['name']}}</a></h2>
                        <span class="quantity">S??? l?????ng: {{$item['qty']}}</span>
                        <span class="shp__price">T???ng: {{number_format($item['price']*$item['qty'])}}</span>
                    </div>
                    <div class="remove__btn">
                        {{-- <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a> --}}
                        <a onclick="return confirm('B???n ??i c?? x??a kh??ng?')" href="{{route('cart.delete',$id)}}"><i
                                class="zmdi zmdi-close"></i></a>
                    </div>
                </div>
                @endforeach
            </div>
            <ul class="shoping__total">
                <li class="subtotal">Th??nh ti???n:</li>
                <li class="total__price">{{number_format($total)}}</li>
            </ul>

            <ul class="shopping__btn">
                <li><a href="{{route('cart.index')}}">Xem gi??? h??ng</a></li>
                <li class="shp__checkout"><a href="{{route('order.create')}}">Thanh to??n</a></li>
            </ul>
        </div>
    </div>
    <!-- End Cart Panel -->
</div>
<!-- End Offset Wrapper -->
