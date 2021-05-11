<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tmart-Minimalist eCommerce HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">


    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/custom.css">


    <!-- Modernizr JS -->
    <script src="{{ asset('frontend') }}/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Body main wrapper start -->
    <div class="wrapper fixed__footer">
        <!-- Start Header Style -->
        <!-- End Header Style -->

        <div class="body__overlay"></div>
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
                        <p>Lorem ipsum dolor sit amet consectetu adipisicing elit sed do eiusmod tempor incididunt ut
                            labore.</p>
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
                            <li><a class="bg--twitter" href="#" title="Twitter"><i class="zmdi zmdi-twitter"></i></a>
                            </li>

                            <li><a class="bg--instagram" href="#" title="Instagram"><i
                                        class="zmdi zmdi-instagram"></i></a></li>

                            <li><a class="bg--facebook" href="#" title="Facebook"><i class="zmdi zmdi-facebook"></i></a>
                            </li>

                            <li><a class="bg--googleplus" href="#" title="Google Plus"><i
                                        class="zmdi zmdi-google-plus"></i></a></li>

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
                        <div class="shp__single__product">
                            <div class="shp__pro__thumb">
                                <a href="#">
                                    <img src="{{ asset('frontend') }}/images/product/sm-img/1.jpg" alt="product images">
                                </a>
                            </div>
                            <div class="shp__pro__details">
                                <h2><a href="product-details.html">BO&Play Wireless Speaker</a></h2>
                                <span class="quantity">QTY: 1</span>
                                <span class="shp__price">$105.00</span>
                            </div>
                            <div class="remove__btn">
                                <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                            </div>
                        </div>
                        <div class="shp__single__product">
                            <div class="shp__pro__thumb">
                                <a href="#">
                                    <img src="{{ asset('frontend') }}/images/product/sm-img/2.jpg" alt="product images">
                                </a>
                            </div>
                            <div class="shp__pro__details">
                                <h2><a href="product-details.html">Brone Candle</a></h2>
                                <span class="quantity">QTY: 1</span>
                                <span class="shp__price">$25.00</span>
                            </div>
                            <div class="remove__btn">
                                <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                            </div>
                        </div>
                    </div>
                    <ul class="shoping__total">
                        <li class="subtotal">Subtotal:</li>
                        <li class="total__price">$130.00</li>
                    </ul>
                    <ul class="shopping__btn">
                        <li><a href="cart.html">View Cart</a></li>
                        <li class="shp__checkout"><a href="checkout.html">Checkout</a></li>
                    </ul>
                </div>
            </div>
            <!-- End Cart Panel -->
        </div>
        <!-- End Offset Wrapper -->
        <!-- Start Login Register Area -->
        <div class="htc__login__register bg__white ptb--130"
            style="background: rgba(0, 0, 0, 0) url({{ asset('frontend') }}/images/bg/5.jpg) no-repeat scroll center center / cover ;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <ul class="login__register__menu" role="tablist">
                            <li role="presentation" class="login active"><a href="#login" role="tab"
                                    data-toggle="tab">Register</a></li>
                            <li role="presentation" class="login "><a href="{{route('loginClient')}}"
                                    role="tab">Login</a></li>
                        </ul>
                    </div>
                </div>
                @if(session('msg'))
                <div class="alert alert-{{session('status')}}" role="alert">
                    {{session('msg')}}
                </div>
                @endif
                <!-- Start Login Register Content -->
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="htc__login__register__wrap">
                            <!-- Start Single Content -->
                            <div id="login" role="tabpanel" class="single__tabs__panel tab-pane fade in active">
                                <form class="login" action="{{route('postRegisterClient')}}" method="post">
                                    @csrf
                                    <input type="text" name="name" placeholder="Name">
                                    <input type="email" name="email" placeholder="email">
                                    <input type="password" name="password" placeholder="password">
                                    <div class="tabs__checkbox">
                                        <input type="checkbox">
                                        <span> Remember me</span>
                                        <span class="forget"><a href="#">Forget Pasword?</a></span>
                                    </div>
                                    <div class="htc__login__btn mt--30">
                                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                                    </div>
                                    <div class="htc__social__connect">
                                        <h2>Or Login With</h2>
                                        <ul class="htc__soaial__list">
                                            <li><a class="bg--twitter" href="#"><i class="zmdi zmdi-twitter"></i></a>
                                            </li>

                                            <li><a class="bg--instagram" href="#"><i
                                                        class="zmdi zmdi-instagram"></i></a></li>

                                            <li><a class="bg--facebook" href="#"><i class="zmdi zmdi-facebook"></i></a>
                                            </li>

                                            <li><a class="bg--googleplus" href="#"><i
                                                        class="zmdi zmdi-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                            <!-- End Single Content -->

                        </div>
                    </div>
                </div>
                <!-- End Login Register Content -->
            </div>
        </div>
        <!-- End Login Register Area -->
    </div>
    <!-- Body main wrapper end -->
    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="{{ asset('frontend') }}/js/vendor/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="{{ asset('frontend') }}/js/plugins.js"></script>
    <script src="{{ asset('frontend') }}/js/slick.min.js"></script>
    <script src="{{ asset('frontend') }}/js/owl.carousel.min.js"></script>
    <!-- Waypoints.min.js. -->
    <script src="{{ asset('frontend') }}/js/waypoints.min.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="{{ asset('frontend') }}/js/main.js"></script>

</body>

</html>
