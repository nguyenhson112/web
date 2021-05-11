@extends('frontend.layout.layout')
@section('content')
<style>
    .product__menu button.is-checked a {
        color: #ff4136;
    }
</style>
<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area"
    style="background: rgba(0, 0, 0, 0) url({{ asset('frontend') }}/images/bg/2.jpg) no-repeat scroll center center / cover ;">
    <div class="ht__bradcaump__wrap">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="bradcaump__inner text-center">
                        <h2 class="bradcaump-title">Shop Page</h2>
                        <nav class="bradcaump-inner">
                            <a class="breadcrumb-item" href="{{route('home')}}">Home</a>
                            <span class="brd-separetor">/</span>
                            <span class="breadcrumb-item active">Shop Page</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<!-- Start Our Product Area -->
<section class="htc__product__area shop__page ptb--130 bg__white">
    <div class="container">
        <div class="htc__product__container">
            <!-- Start Product MEnu -->
            <div class="row">
                <div class="col-md-12">
                    <div class="filter__menu__container">
                        <div class="product__menu">
                            @php
                            $URI = $_SERVER['REQUEST_URI'];
                            $id = explode('/', $URI);
                            //dd($id);
                            if(isset($id[2])){
                            $id = $id[2];
                            } else {
                            $id = 0;
                            }
                            @endphp
                            <button class="<?= $id == 0 ? "is-checked" : "" ?>">
                                <a href="{{route('product.list')}}">All</a>
                            </button>
                            @foreach ($typeProduct as $item)

                            <button class="<?= $item->id == $id ? "is-checked" : "" ?>">
                                <a href="{{route('typeProduct',$item->id)}}">{{$item->type_name}}</a>
                            </button>
                            @endforeach
                        </div>
                        <div class="filter__box">
                            <a class="filter__menu" href="#">filter</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Filter Menu -->
            <div class="filter__wrap">
                <div class="filter__cart">
                    <div class="filter__cart__inner">
                        <div class="filter__menu__close__btn">
                            <a href="#"><i class="zmdi zmdi-close"></i></a>
                        </div>
                        <div class="filter__content">
                            <!-- Start Single Content -->
                            <div class="fiter__content__inner">
                                <div class="single__filter">
                                    <h2>Sort By</h2>
                                    <ul class="filter__list">
                                        <li><a href="#default">Default</a></li>
                                        <li><a href="#accessories">Accessories</a></li>
                                        <li><a href="#bags">Bags</a></li>
                                        <li><a href="#chair">Chair</a></li>
                                        <li><a href="#decoration">Decoration</a></li>
                                        <li><a href="#fashion">Fashion</a></li>
                                    </ul>
                                </div>
                                <div class="single__filter">
                                    <h2>Size</h2>
                                    <ul class="filter__list">
                                        <li><a href="#xxl">XXL</a></li>
                                        <li><a href="#xl">XL</a></li>
                                        <li><a href="#x">X</a></li>
                                        <li><a href="#l">L</a></li>
                                        <li><a href="#m">M</a></li>
                                        <li><a href="#s">S</a></li>
                                    </ul>
                                </div>
                                <div class="single__filter">
                                    <h2>Tags</h2>
                                    <ul class="filter__list">
                                        <li><a href="#">All</a></li>
                                        <li><a href="#">Accessories</a></li>
                                        <li><a href="#">Bags</a></li>
                                        <li><a href="#">Chair</a></li>
                                        <li><a href="#">Decoration</a></li>
                                        <li><a href="#">Fashion</a></li>
                                    </ul>
                                </div>
                                <div class="single__filter">
                                    <h2>Price</h2>
                                    <ul class="filter__list">
                                        <li><a href="#">$0.00 - $50.00</a></li>
                                        <li><a href="#">$50.00 - $100.00</a></li>
                                        <li><a href="#">$100.00 - $150.00</a></li>
                                        <li><a href="#">$150.00 - $200.00</a></li>
                                        <li><a href="#">$300.00 - $500.00</a></li>
                                        <li><a href="#">$500.00 - $700.00</a></li>
                                    </ul>
                                </div>
                                <div class="single__filter">
                                    <h2>Color</h2>
                                    <ul class="filter__list sidebar__list">
                                        <li class="black"><a href="#"><i class="zmdi zmdi-circle"></i>Black</a></li>
                                        <li class="blue"><a href="#"><i class="zmdi zmdi-circle"></i>Blue</a></li>
                                        <li class="brown"><a href="#"><i class="zmdi zmdi-circle"></i>Brown</a></li>
                                        <li class="red"><a href="#"><i class="zmdi zmdi-circle"></i>Red</a></li>
                                        <li class="orange"><a href="#"><i class="zmdi zmdi-circle"></i>Orange</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Single Content -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Filter Menu -->
            @if (count($list)>0)
            <!-- End Product MEnu -->
            <div class="row">
                @if(session('msg'))
                <div class="alert alert-{{session('status')}}" role="alert">
                    {{session('msg')}}
                </div>
                @endif
                <div class="product__list another-product-style">
                    @foreach ($list as $item)
                    <!-- Start Single Product -->
                    <div class="col-md-3 single__pro col-lg-3 cat--1 col-sm-4 col-xs-12">
                        <div class="product foo">
                            <div class="product__inner">
                                <div class="pro__thumb">
                                    <a href="#">
                                        <img src="<?=$item->product_avatar?asset($item->product_avatar):asset('upload/no-image.png')?>"
                                            alt="{{$item->product_name}}">
                                    </a>
                                </div>
                                <div class="product__hover__info">
                                    <ul class="product__action">
                                        <li><a data-toggle="modal" data-target="#productModal" title="Quick View"
                                                class="quick-view modal-view detail-link" href="#"><span
                                                    class="ti-plus"></span></a></li>
                                        <li><a title="Thêm vào giỏ" href="{{route('cart.add',$item->id)}}"><span class="ti-shopping-cart"></span></a>
                                        </li>
                                        <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a>
                                            {{-- <li><a title="Thêm vào giỏ" href="{{route('cart.add',$item->id)}}"><span
                                                class="ti-shopping-cart"></span></a></li>
                                        <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a>
                                            --}}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__details">
                                <h2><a href="{{route('detail',$item->id)}}">{{$item->product_name}}</a></h2>
                                <ul class="product__price">
                                    {{-- <li class="old__price">$16.00</li> --}}
                                    <li class="new__price">{{number_format( $item->product_price)}}đ</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                    @endforeach
                </div>
            </div>
            <!-- Start Load More BTn -->
            <div class="row mt--60">
                <div class="col-md-12 text-right">
                    {{$list->links()}}
                    {{-- <div class="htc__loadmore__btn">
                        <a href="#">load more</a>
                    </div> --}}
                </div>
            </div>
            <!-- End Load More BTn -->
            @else
            <div class="text-center" style="margin-top: 25px">Không có dữ liệu</div>
            @endif

        </div>
    </div>
</section>
<!-- End Our Product Area -->
@endsection
