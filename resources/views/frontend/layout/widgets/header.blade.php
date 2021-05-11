<!-- Start Header Style -->
<header id="header" class="htc-header header--3 bg__white">
    <!-- Start Mainmenu Area -->
    <div id="sticky-header-with-topbar" class="mainmenu__area sticky__header">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-lg-2 col-sm-3 col-xs-3">
                    <div class="logo">
                        <a href="{{route('home')}}">
                            <img src="{{ asset('frontend') }}/images/logo/logo.png" alt="logo">
                        </a>
                    </div>
                </div>
                <!-- Start MAinmenu Ares -->
                <div class="col-md-8 col-lg-8 col-sm-6 col-xs-6">
                    <nav class="mainmenu__nav hidden-xs hidden-sm">
                        <ul class="main__menu">
                            <li class="drop"><a href="{{route('home')}}">Trang chủ</a></li>
                            <li><a href="{{route('product.list')}}">Sản phẩm</a></li>
                            <li class="drop"><a href="shop.html">Shop</a>
                                <ul class="dropdown mega_dropdown">
                                    <!-- Start Single Mega MEnu -->
                                    <li><a class="mega__title" href="shop.html">shop layout</a>
                                        <ul class="mega__item">
                                            <li><a href="shop.html">default shop</a></li>
                                        </ul>
                                    </li>
                                    <!-- End Single Mega MEnu -->
                                    <!-- Start Single Mega MEnu -->
                                    <li><a class="mega__title" href="shop.html">product details layout</a>
                                        <ul class="mega__item">
                                            <li><a href="product-details.html">tab style 1</a></li>
                                    </li>
                                </ul>
                            </li>
                            <!-- End Single Mega MEnu -->
                            <!-- Start Single Mega MEnu -->
                            <li>
                                <ul class="mega__item">
                                    <li>
                                        <div class="mega-item-img">
                                            <a href="shop.html">
                                                <img src="{{ asset('frontend') }}/images/feature-img/3.png" alt="">
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- End Single Mega MEnu -->
                        </ul>
                        </li>
                        <li class="drop"><a href="#">pages</a>
                            <ul class="dropdown">
                                <li><a href="about.html">about</a></li>
                                <li><a href="#">testimonials <span><i class="zmdi zmdi-chevron-right"></i></span></a>
                                    <ul class="lavel-dropdown">
                                        <li><a href="customer-review.html">customer review</a></li>
                                    </ul>
                                </li>
                                <li><a href="shop.html">shop</a></li>
                                <li><a href="shop-sidebar.html">shop sidebar</a></li>
                                <li><a href="product-details.html">product details</a></li>
                                <li><a href="cart.html">cart</a></li>
                                <li><a href="wishlist.html">wishlist</a></li>
                                <li><a href="checkout.html">checkout</a></li>
                                <li><a href="team.html">team</a></li>
                                <li><a href="login-register.html">login & register</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">contact</a></li>
                        </ul>
                    </nav>
                    <div class="mobile-menu clearfix visible-xs visible-sm">
                        <nav id="mobile_dropdown">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="#">portfolio</a>
                                    <ul>
                                        <li><a href="portfolio-card-box-2.html">portfolio</a></li>
                                        <li><a href="single-portfolio.html">Single portfolio</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog.html">blog</a>
                                    <ul>
                                        <li><a href="blog.html">blog 3 column</a></li>
                                        <li><a href="blog-details.html">Blog details</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">pages</a>
                                    <ul>
                                        <li><a href="about.html">about</a></li>
                                        <li><a href="customer-review.html">customer review</a></li>
                                        <li><a href="shop.html">shop</a></li>
                                        <li><a href="shop-sidebar.html">shop sidebar</a></li>
                                        <li><a href="product-details.html">product details</a></li>
                                        <li><a href="cart.html">cart</a></li>
                                        <li><a href="wishlist.html">wishlist</a></li>
                                        <li><a href="checkout.html">checkout</a></li>
                                        <li><a href="team.html">team</a></li>
                                        <li><a href="login-register.html">login & register</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- End MAinmenu Ares -->
                <div class="col-md-2 col-sm-4 col-xs-3">
                    <ul class="menu-extra">
                        <li class="search search__open hidden-xs"><span class="ti-search"></span></li>
                        {{-- <li>
                            @if (Auth::check())
                            <a href="#" data-toggle="tooltip" title="{{Auth::user()->email}}"><span
                            class="ti-user"></span></a>
                        @else
                        <a href="{{route('loginClient')}}"><span class="ti-user"></span></a>
                        @endif
                        </li>
                        @if (Auth::check())
                        <li>
                            <a href="{{route('logoutClient')}}" data-toggle="tooltip" title="Đăng Xuất"><span
                                    class="ti-shift-right"></span></a>
                        </li>
                        @endif --}}
                        <li class="nav-item dropdown">
                            @if (Auth::check())
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="ti-user"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                {{-- <a class="dropdown-item" href="#">Tài khoản của tôi</a><br>
                                <a class="dropdown-item" href="{{route('loginClient')}}">Đơn mua</a><br>
                                <a class="ti-shift-right" href="{{route('loginClient')}}">Đăng xuât</a><br> --}}
                                <a href="{{route('logoutClient')}}" data-toggle="tooltip"
                                    title="{{Auth::user()->email}}">Tài khoản của tôi</a><br>
                                <a href="{{route('order.done')}}">Đơn mua</a><br>
                                <a href="{{route('logoutClient')}}">Đăng xuất</a><br>
                            </div>
                            @else
                            <a href="{{route('loginClient')}}" title="Đăng nhập" data-toggle="tooltip"><span class="ti-user"></span></a>
                            @endif
                        </li>
                        <li class="cart__menu"><span class="ti-shopping-cart"></span></li>
                        <li class="toggle__menu hidden-xs hidden-sm"><span class="ti-menu"></span></li>
                    </ul>
                </div>
            </div>
            <div class="mobile-menu-area"></div>
        </div>
    </div>
    <!-- End Mainmenu Area -->
</header>
<!-- End Header Style -->
