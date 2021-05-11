<!doctype html>
<html class="no-js" lang="en">
<head>
    <title></title>
    @include('frontend.layout.widgets.head')
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Body main wrapper start -->
    <div class="wrapper fixed__footer">
        @include('frontend.layout.widgets.header')

        <div class="body__overlay"></div>
        @include('frontend.layout.widgets.search')
        {{-- //main --}}
        @yield('content')
        @include('frontend.layout.widgets.footer')
    </div>
    <!-- Body main wrapper end -->
    {{-- quickview --}}
    @include('frontend.layout.widgets.js')

</body>

</html>
