<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Food House</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/icon/favicon.png') }}">

    <!-- All CSS Files -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Nivo-slider css -->
    <link rel="stylesheet" href="{{ asset('lib/css/nivo-slider.css') }}">
    <!-- This core.css') }} file contents all plugings css file. -->
    <link rel="stylesheet" href="{{ asset('css/core.css') }}">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="{{ asset('css/shortcode/shortcodes.css') }}">
    <!-- Theme main style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- Template color css -->
    <link href="{{ asset('css/color/color-core.css') }}" data-style="styles" rel="stylesheet">
    <!-- User style -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <!-- Modernizr JS -->
    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <style>
        .breadcrumbs1 {
            background: #f6f6f6 url("{{ asset('img/breadcrumb/1.png') }}") no-repeat scroll center center / cover ;
        }
    </style>
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Body main wrapper start -->
<div class="wrapper">

    <!-- START HEADER AREA -->
    <header class="header-area header-wrapper">
        <!-- header-top-bar -->
        <div class="header-top-bar plr-185">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 hidden-xs">
                        <div class="call-us">
                            <p class="mb-0 roboto">(+95) 09796266681</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="top-link clearfix">
                            <ul class="link f-right">
                                <li>
                                    <a href="#">
                                        <i class="zmdi zmdi-account"></i>
                                        {{ request()->session()->get('staff_key')[0][0] }}
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html">
                                        <i class="zmdi zmdi-favorite"></i>
                                        Wish List (0)
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/staff/logout') }}">
                                        <i class="zmdi zmdi-lock"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-middle-area -->
        <div id="sticky-header" class="header-middle-area plr-185">
            <div class="container-fluid">
                <div class="full-width-mega-dropdown">
                    <div class="row">
                        <!-- logo -->
                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="{{ asset('img/logo/logo.png') }}" alt="main logo">
                                </a>
                            </div>
                        </div>
                        <!-- primary-menu -->
                        <div class="col-md-8 hidden-sm hidden-xs">
                            <nav id="primary-menu">
                                <ul class="main-menu text-center">

                                </ul>
                            </nav>
                        </div>
                        <!-- header-search & total-cart -->
                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <div class="search-top-cart  f-right">
                                <!-- header-search -->
                                <div class="header-search f-left">
                                    <div class="header-search-inner">
                                        <button class="search-toggle">
                                            <i class="zmdi zmdi-search"></i>
                                        </button>
                                        <form action="{{ url('search') }}">
                                            <div class="top-search-box">
                                                <input type="text" name="key" placeholder="Search here your product...">
                                                <button type="submit">
                                                    <i class="zmdi zmdi-search"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- total-cart -->
                                <div class="total-cart f-left">
                                    <div class="total-cart-in">
                                        <div class="cart-toggler">
                                            <a href="#">
                                                <span class="cart-quantity">
                                                    @if( request()->session()->get('cart') )
                                                        {{ count(request()->session()->get('cart')) }}

                                                    @else
                                                        0

                                                    @endif
                                                </span><br>
                                                <span class="cart-icon">
                                                        <i class="zmdi zmdi-shopping-cart-plus"></i>
                                                    </span>
                                            </a>
                                        </div>
                                        <ul>
                                            <li>
                                                <div class="top-cart-inner your-cart">
                                                    <h5 class="text-capitalize">Your Cart</h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="total-cart-pro">
                                                    <!-- single-cart -->
                                                    @if( request()->session()->get('cart') )
                                                        @foreach(request()->session()->get('cart') as $i=>$id)
                                                            <div class="single-cart clearfix">
                                                            <div class="cart-img f-left">
                                                                <a href="#">
                                                                    @if(\App\Menu::find($id)->image)
                                                                        <img src="{{ asset('storage/' .\App\Menu::find($id)->image) }}" width="100px" height="111px" alt="Cart Product" />
                                                                    @else
                                                                        <img src="{{ asset('img/cart/1.jpg') }}" width="100px" height="111px" alt="Cart Product" />
                                                                    @endif
                                                                </a>
                                                                <div class="del-icon">
                                                                    <a href="{{ url('/staff/removeI/'.$i) }}">
                                                                        <i class="zmdi zmdi-close"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="cart-info f-left">
                                                                <h6 class="text-capitalize">
                                                                    <a href="#">{{\App\Menu::find($id)->name}}</a>
                                                                </h6>
                                                                <p>
                                                                    <span>Cate <strong>:</strong></span>{{\App\Menu::find($id)->category->name}}
                                                                </p>
                                                                <p>
                                                                    <span>Price <strong>:</strong></span>{{\App\Menu::find($id)->price}}
                                                                </p>
                                                            </div>
                                                        </div>
                                                        @endforeach


                                                </div>
                                            </li>
                                            <li>
                                                <div class="top-cart-inner subtotal">
                                                    <h4 class="text-uppercase g-font-2">
                                                        Total  =
                                                        <span>{{ \App\Menu::whereIn('id',request()->session()->get('cart'))->get()->sum('price') }}</span>
                                                    </h4>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="top-cart-inner view-cart">
                                                    <h4 class="text-uppercase">
                                                        <a href="{{ url('/staff/cart') }}">View cart</a>
                                                    </h4>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="top-cart-inner check-out">
                                                    <h4 class="text-uppercase">
                                                        <a href="{{ url('/staff/home') }}">Go Menu</a>
                                                    </h4>
                                                </div>
                                            </li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER AREA -->

    <!-- START MOBILE MENU AREA -->

    <!-- END MOBILE MENU AREA -->

    <!-- BREADCRUMBS SETCTION START -->
    <div class="breadcrumbs-section plr-200 mb-80">
        <div class="breadcrumbs1 overlay-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcrumbs-inner">
                            <h1 class="breadcrumbs-title">product grid view</h1>
                            <ul class="breadcrumb-list">
                                <li><a href="{{ url('staff/home') }}">Home</a></li>
                                <li>product grid view</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMBS SETCTION END -->

    <!-- Start page content -->
    <div id="page-content" class="page-wrapper">

        <!-- SHOP SECTION START -->
        <div class="shop-section mb-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-md-push-3 col-sm-12">
                        <div class="shop-content">
                            <!-- shop-option start -->
                            <div class="shop-option box-shadow mb-30 clearfix">
                                <!-- Nav tabs -->
                                <ul class="shop-tab f-left" role="tablist">
                                    <li class="active">
                                        <a href="#grid-view" data-toggle="tab"><i class="zmdi zmdi-view-module"></i></a>
                                    </li>
                                    <li>
                                        <a href="#list-view" data-toggle="tab"><i class="zmdi zmdi-view-list-alt"></i></a>
                                    </li>
                                </ul>
                                <!-- short-by -->

                                <!-- showing -->
                                <div class="showing f-right text-right">
                                    <span>Showing : {{ $menus->firstItem() }}-{{ $menus->lastItem() }} of {{ $menus->total() }}.</span>
                                </div>
                            </div>
                            <!-- shop-option end -->
                            <!-- Tab Content start -->
                            <div class="tab-content">
                                <!-- grid-view -->
                                <div role="tabpanel" class="tab-pane active" id="grid-view">
                                    <div class="row">
                                        <!-- product-item start -->
                                        @foreach($menus as $menu)
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="#">
                                                        @if($menu->image)
                                                            <img src="{{ asset('storage/' . $menu->image) }}" alt="" class="img-thumbnail">
                                                        @else
                                                            <img src="{{ asset('img/product/7.jpg') }}" alt=""/>
                                                        @endif
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <h6 class="product-title">
                                                        <a href="#">{{ $menu->name }}</a>
                                                    </h6>
                                                    <h3 class="pro-price">{{ $menu->price }}</h3>
                                                    <ul class="action-button">
                                                        @if(in_array($menu->id, request()->session()->get('cart')??[]))
                                                        <li>
                                                            <a href="/staff/cart" title="Compare"><i class="zmdi zmdi-open-in-new"></i></a>
                                                        </li>
                                                        @else
                                                        <li>
                                                            <a href="{{ url('/staff/cart/'.$menu->id) }}" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </li>
                                                        @endif
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

                                        <!-- product-item end -->
                                    </div>
                                </div>
                                <!-- list-view -->
                                <div role="tabpanel" class="tab-pane" id="list-view">
                                    <div class="row">
                                        <!-- product-item start -->
                                        @foreach($menus as $menu)
                                            <div class="col-md-12">
                                                <div class="shop-list product-item">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            @if($menu->image)
                                                                <img src="{{ asset('storage/' . $menu->image) }}" alt="" class="img-thumbnail">
                                                            @else
                                                                <img src="{{ asset('img/product/7.jpg') }}" alt=""/>
                                                            @endif
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="clearfix">
                                                            <h6 class="product-title f-left">
                                                                <a href="#">{{ $menu->name }}</a>
                                                            </h6>
                                                        </div>
                                                        <h6 class="brand-name mb-30">{{ $menu->category->name }}</h6>
                                                        <h3 class="pro-price">{{ $menu->price }}</h3>
                                                        <p>{{ $menu->desc }}</p>
                                                        <ul class="action-button">
                                                            @if(in_array($menu->id, request()->session()->get('cart')??[]))
                                                                <li>
                                                                    <a href="/staff/cart" title="Compare"><i class="zmdi zmdi-open-in-new"></i></a>
                                                                </li>
                                                            @else
                                                                <li>
                                                                    <a href="{{ url('/staff/cart/'.$menu->id) }}" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                </li>
                                                            @endif
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach


                                    </div>
                                </div>
                            </div>

                            <!-- Tab Content end -->
                            <!-- shop-pagination start -->
                            <ul class="shop-pagination box-shadow text-center ptblr-10-30">
                                {{ $menus->links() }}
                            </ul>
                            <!-- shop-pagination end -->
                        </div>
                    </div>
                    <div class="col-md-3 col-md-pull-9 col-sm-12">
                        <!-- widget-search -->
{{--                        <aside class="widget-search mb-30">--}}
{{--                            <form action="#">--}}
{{--                                <input type="text" placeholder="Search here...">--}}
{{--                                <button type="submit"><i class="zmdi zmdi-search"></i></button>--}}
{{--                            </form>--}}
{{--                        </aside>--}}
                        <!-- widget-categories -->
                        <aside class="widget widget-categories box-shadow mb-30">
                            <h6 class="widget-title border-left mb-20">Categories</h6>
                            <div id="cat-treeview" class="product-cat">
                                <ul>
                                    @foreach($categories as $category)
                                         <li class="closed"><a href="{{ url('/catSearch/'.$category->id) }}">{{ $category->name }}</a>  </li>
                                    @endforeach
                                </ul>
                            </div>
                        </aside>
                        <!-- shop-filter -->

                        <!-- operating-system -->

                        <!-- widget-product -->

                    </div>
                </div>
            </div>
        </div>
        <!-- SHOP SECTION END -->

    </div>
    <!-- End page content -->

    <!-- START FOOTER AREA -->

    <!-- END FOOTER AREA -->

    <!-- START QUICKVIEW PRODUCT -->

</div>
<!-- Body main wrapper end -->


<!-- Placed JS at the end of the document so the pages load faster -->

<!-- jquery latest version -->
<script src="{{ asset('js/vendor/jquery-3.1.1.min.js') }}"></script>
<!-- Bootstrap framework js -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- jquery.nivo.slider js -->
<script src="{{ asset('lib/js/jquery.nivo.slider.js') }}"></script>
<!-- All js plugins included in this file. -->
<script src="{{ asset('js/plugins.js') }}"></script>
<!-- Main js file that contents all jQuery plugins activation. -->
<script src="{{ asset('js/main.js') }}"></script>

</body>


</html>
