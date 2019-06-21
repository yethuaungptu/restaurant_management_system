<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Subash || Shop</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/icon/favicon.png') }}') }}">

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
                            <p class="mb-0 roboto">(+88) 01234-567890</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="top-link clearfix">
                            <ul class="link f-right">
                                <li>
                                    <a href="#">
                                        <i class="zmdi zmdi-account"></i>
                                        {{ request()->session()->get('staff_key') }}
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
                                        <form action="#">
                                            <div class="top-search-box">
                                                <input type="text" placeholder="Search here your product...">
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
                                                <span class="cart-quantity" id="countC">
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
                                                            {{ $i }}
                                                            <div class="single-cart clearfix">
                                                                <div class="cart-img f-left">
                                                                    <a href="#">
                                                                        <img src="{{ asset('img/cart/1.jpg') }}" alt="Cart Product" />
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
                                                                        <span>Color <strong>:</strong></span>{{\App\Menu::find($id)->price}}
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
                                                <div class="top-cart-inner view-cart">a
                                                    <h4 class="text-uppercase">
                                                        <a href="#">View cart</a>
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
        <div class="breadcrumbs overlay-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcrumbs-inner">
                            <h1 class="breadcrumbs-title">product grid view</h1>
                            <ul class="breadcrumb-list">
                                <li><a href="index.html">Home</a></li>
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
    <section id="page-content" class="page-wrapper">

        <!-- SHOP SECTION START -->
        <div class="shop-section mb-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-12">
                        <ul class="cart-tab">
                            <li>
                                <a class="active" href="#shopping-cart" data-toggle="tab">
                                    <span>01</span>
                                    Shopping cart
                                </a>
                            </li>
                            <li>
                                <a href="#wishlist" data-toggle="tab">
                                    <span>02</span>
                                    Ordered List
                                </a>
                            </li>
                            <li>
                                <a href="#order-complete" data-toggle="tab">
                                    <span>03</span>
                                    Order complete
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-10 col-sm-12">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!-- shopping-cart start -->
                            <div class="tab-pane active" id="shopping-cart">
                                <div class="shopping-cart-content">
                                    <form action="#">
                                        <div class="table-content table-responsive mb-50">
                                            <table class="text-center">
                                                <thead>
                                                <tr>
                                                    <th class="product-thumbnail">product</th>
                                                    <th class="product-price">price</th>
                                                    <th class="product-quantity">Quantity</th>
                                                    <th class="product-subtotal">total</th>
                                                    <th class="product-remove">remove</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <!-- tr -->
                                                @if( request()->session()->get('cart') )
                                                    @foreach(request()->session()->get('cart') as $i=>$id)
                                                        <tr>
                                                            <td class="product-thumbnail">
                                                                <div class="pro-thumbnail-img">
                                                                    <img src="{{ asset('img/cart/1.jpg') }}" alt="">
                                                                </div>
                                                                <div class="pro-thumbnail-info text-left">
                                                                    <h6 class="product-title-2">
                                                                        <a href="#">{{\App\Menu::find($id)->name}}</a>
                                                                    </h6>
                                                                    <p>{{\App\Menu::find($id)->category->name}}</p>
                                                                </div>
                                                            </td>
                                                            <td class="product-price" id="pr{{$id}}">{{\App\Menu::find($id)->price}}</td>
                                                            <td class="product-quantity">
                                                                <div class="cart-plus-minus f-left">
                                                                    <input type="text" value="1" id="{{ $id }}" name="qtybutton" class="cart-plus-minus-box">
                                                                </div>
                                                            </td>
                                                            <td class="product-subtotal" ><span id="val{{ $id }}" class="ch{{ $i }}">{{\App\Menu::find($id)->price}}</span></td>
                                                            <td class="product-remove">
                                                                <a href="{{ url('/staff/removeI/'.$i) }}"><i class="zmdi zmdi-close"></i></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                                <!-- tr -->
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="payment-details box-shadow p-30 mb-50">
                                                    <h6 class="widget-title border-left mb-20">payment details</h6>
                                                    <table>
                                                        <tr>
                                                            <td class="td-title-1">Cart Subtotal</td>
                                                            <td class="td-title-2" id="carttol">0</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="td-title-1">Table Charge</td>
                                                            <td class="td-title-2">0</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="td-title-1">Tax</td>
                                                            <td class="td-title-2">0</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="order-total">Order Total</td>
                                                            <td class="order-total-price" id="total">$170.00</td>
                                                        </tr>
                                                    </table>

                                                </div>
                                                <div class="col-md-10"></div>
                                                <div class="col-md-2 align-items-end">
                                                    <button class="submit-btn-1 black-bg btn-hover-2">Order Menu</button>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <!-- shopping-cart end -->
                            <!-- wishlist start -->
                            <div class="tab-pane" id="wishlist">
                                <div class="wishlist-content">
                                    <form action="#">
                                        <div class="table-content table-responsive mb-50">
                                            <table class="text-center">
                                                <thead>
                                                <tr>
                                                    <th class="product-thumbnail">product</th>
                                                    <th class="product-price">price</th>
                                                    <th class="product-stock">Stock status</th>
                                                    <th class="product-add-cart">add to cart</th>
                                                    <th class="product-remove">remove</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <!-- tr -->
                                                <tr>
                                                    <td class="product-thumbnail">
                                                        <div class="pro-thumbnail-img">
                                                            <img src="{{ asset('img/product/7.jpg') }}" alt="">
                                                        </div>
                                                        <div class="pro-thumbnail-info text-left">
                                                            <h6 class="product-title-2">
                                                                <a href="#">dummy product name</a>
                                                            </h6>
                                                            <p>Brand: Brand Name</p>
                                                            <p>Model: Grand s2</p>
                                                            <p> Color: Black, White</p>
                                                        </div>
                                                    </td>
                                                    <td class="product-price">$560.00</td>
                                                    <td class="product-stock text-uppercase">in stoct</td>
                                                    <td class="product-add-cart">
                                                        <a href="#" title="Add To Cart">
                                                            <i class="zmdi zmdi-shopping-cart-plus"></i>
                                                        </a>
                                                    </td>
                                                    <td class="product-remove">
                                                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                                                    </td>
                                                </tr>
                                                <!-- tr -->
                                                <tr>
                                                    <td class="product-thumbnail">
                                                        <div class="pro-thumbnail-img">
                                                            <img src="{{ asset('img/cart/2.jpg') }}" alt="">
                                                        </div>
                                                        <div class="pro-thumbnail-info text-left">
                                                            <h6 class="product-title-2">
                                                                <a href="#">dummy product name</a>
                                                            </h6>
                                                            <p>Brand: Brand Name</p>
                                                            <p>Model: Grand s2</p>
                                                            <p> Color: Black, White</p>
                                                        </div>
                                                    </td>
                                                    <td class="product-price">$560.00</td>
                                                    <td class="product-stock text-uppercase">in stoct</td>
                                                    <td class="product-add-cart">
                                                        <a href="#" title="Add To Cart">
                                                            <i class="zmdi zmdi-shopping-cart-plus"></i>
                                                        </a>
                                                    </td>
                                                    <td class="product-remove">
                                                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                                                    </td>
                                                </tr>
                                                <!-- tr -->
                                                <tr>
                                                    <td class="product-thumbnail">
                                                        <div class="pro-thumbnail-img">
                                                            <img src="{{ asset('img/cart/3.jpg') }}" alt="">
                                                        </div>
                                                        <div class="pro-thumbnail-info text-left">
                                                            <h6 class="product-title-2">
                                                                <a href="#">dummy product name</a>
                                                            </h6>
                                                            <p>Brand: Brand Name</p>
                                                            <p>Model: Grand s2</p>
                                                            <p> Color: Black, White</p>
                                                        </div>
                                                    </td>
                                                    <td class="product-price">$560.00</td>
                                                    <td class="product-stock text-uppercase">in stoct</td>
                                                    <td class="product-add-cart">
                                                        <a href="#" title="Add To Cart">
                                                            <i class="zmdi zmdi-shopping-cart-plus"></i>
                                                        </a>
                                                    </td>
                                                    <td class="product-remove">
                                                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- wishlist end -->
                            <!-- checkout start -->
                            <div class="tab-pane" id="checkout">
                                <div class="checkout-content box-shadow p-30">
                                    <form action="#">
                                        <div class="row">
                                            <!-- billing details -->
                                            <div class="col-md-6">
                                                <div class="billing-details pr-10">
                                                    <h6 class="widget-title border-left mb-20">billing details</h6>
                                                    <input type="text"  placeholder="Your Name Here...">
                                                    <input type="text"  placeholder="Email address here...">
                                                    <input type="text"  placeholder="Phone here...">
                                                    <input type="text"  placeholder="Company neme here...">
                                                    <select class="custom-select">
                                                        <option value="defalt">country</option>
                                                        <option value="c-1">Australia</option>
                                                        <option value="c-2">Bangladesh</option>
                                                        <option value="c-3">Unitd States</option>
                                                        <option value="c-4">Unitd Kingdom</option>
                                                    </select>
                                                    <select class="custom-select">
                                                        <option value="defalt">State</option>
                                                        <option value="c-1">Melbourne</option>
                                                        <option value="c-2">Dhaka</option>
                                                        <option value="c-3">New York</option>
                                                        <option value="c-4">London</option>
                                                    </select>
                                                    <select class="custom-select">
                                                        <option value="defalt">Town/City</option>
                                                        <option value="c-1">Victoria</option>
                                                        <option value="c-2">Chittagong</option>
                                                        <option value="c-3">Boston</option>
                                                        <option value="c-4">Cambridge</option>
                                                    </select>
                                                    <textarea class="custom-textarea" placeholder="Your address here..."></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <!-- our order -->
                                                <div class="payment-details pl-10 mb-50">
                                                    <h6 class="widget-title border-left mb-20">our order</h6>
                                                    <table>
                                                        <tr>
                                                            <td class="td-title-1">Dummy Product Name x 2</td>
                                                            <td class="td-title-2">$1855.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="td-title-1">Dummy Product Name</td>
                                                            <td class="td-title-2">$555.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="td-title-1">Cart Subtotal</td>
                                                            <td class="td-title-2">$2410.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="td-title-1">Shipping and Handing</td>
                                                            <td class="td-title-2">$15.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="td-title-1">Vat</td>
                                                            <td class="td-title-2">$00.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="order-total">Order Total</td>
                                                            <td class="order-total-price">$2425.00</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <!-- payment-method -->
                                                <div class="payment-method">
                                                    <h6 class="widget-title border-left mb-20">payment method</h6>
                                                    <div id="accordion">
                                                        <div class="panel">
                                                            <h4 class="payment-title box-shadow">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#bank-transfer" >
                                                                    direct bank transfer
                                                                </a>
                                                            </h4>
                                                            <div id="bank-transfer" class="panel-collapse collapse in" >
                                                                <div class="payment-content">
                                                                    <p>Lorem Ipsum is simply in dummy text of the printing and type setting industry. Lorem Ipsum has been.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel">
                                                            <h4 class="payment-title box-shadow">
                                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                                    cheque payment
                                                                </a>
                                                            </h4>
                                                            <div id="collapseTwo" class="panel-collapse collapse">
                                                                <div class="payment-content">
                                                                    <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel">
                                                            <h4 class="payment-title box-shadow">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" >
                                                                    paypal
                                                                </a>
                                                            </h4>
                                                            <div id="collapseThree" class="panel-collapse collapse" >
                                                                <div class="payment-content">
                                                                    <p>Pay via PayPal; you can pay with your credit card if you don't have a PayPal account.</p>
                                                                    <ul class="payent-type mt-10">
                                                                        <li><a href="#"><img src="{{ asset('img/payment/1.png') }}" alt=""></a></li>
                                                                        <li><a href="#"><img src="{{ asset('img/payment/2.png') }}" alt=""></a></li>
                                                                        <li><a href="#"><img src="{{ asset('img/payment/3.png') }}" alt=""></a></li>
                                                                        <li><a href="#"><img src="{{ asset('img/payment/4.png') }}" alt=""></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- payment-method end -->
                                                <button class="submit-btn-1 mt-30 btn-hover-1" type="submit">place order</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- checkout end -->
                            <!-- order-complete start -->
                            <div class="tab-pane" id="order-complete">
                                <div class="order-complete-content box-shadow">
                                    <div class="thank-you p-30 text-center">
                                        <h6 class="text-black-5 mb-0">Thank you. Your order has been received.</h6>
                                    </div>
                                    <div class="order-info p-30 mb-10">
                                        <ul class="order-info-list">
                                            <li>
                                                <h6>order no</h6>
                                                <p>m 2653257</p>
                                            </li>
                                            <li>
                                                <h6>order no</h6>
                                                <p>m 2653257</p>
                                            </li>
                                            <li>
                                                <h6>order no</h6>
                                                <p>m 2653257</p>
                                            </li>
                                            <li>
                                                <h6>order no</h6>
                                                <p>m 2653257</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="row">
                                        <!-- our order -->
                                        <div class="col-md-6">
                                            <div class="payment-details p-30">
                                                <h6 class="widget-title border-left mb-20">our order</h6>
                                                <table>
                                                    <tr>
                                                        <td class="td-title-1">Dummy Product Name x 2</td>
                                                        <td class="td-title-2">$1855.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-title-1">Dummy Product Name</td>
                                                        <td class="td-title-2">$555.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-title-1">Cart Subtotal</td>
                                                        <td class="td-title-2">$2410.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-title-1">Shipping and Handing</td>
                                                        <td class="td-title-2">$15.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-title-1">Vat</td>
                                                        <td class="td-title-2">$00.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="order-total">Order Total</td>
                                                        <td class="order-total-price">$2425.00</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="bill-details p-30">
                                                <h6 class="widget-title border-left mb-20">billing details</h6>
                                                <ul class="bill-address">
                                                    <li>
                                                        <span>Address:</span>
                                                        28 Green Tower, Street Name, New York City, USA
                                                    </li>
                                                    <li>
                                                        <span>email:</span>
                                                        info@companyname.com
                                                    </li>
                                                    <li>
                                                        <span>phone : </span>
                                                        (+880) 19453 821758
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="bill-details pl-30">
                                                <h6 class="widget-title border-left mb-20">billing details</h6>
                                                <ul class="bill-address">
                                                    <li>
                                                        <span>Address:</span>
                                                        28 Green Tower, Street Name, New York City, USA
                                                    </li>
                                                    <li>
                                                        <span>email:</span>
                                                        info@companyname.com
                                                    </li>
                                                    <li>
                                                        <span>phone : </span>
                                                        (+880) 19453 821758
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- order-complete end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SHOP SECTION END -->

    </section>
    <!-- End page content -->

    <!-- START FOOTER AREA -->

    <!-- END FOOTER AREA -->

    <!-- START QUICKVIEW PRODUCT -->
{{--    <div id="quickview-wrapper">--}}
{{--        <!-- Modal -->--}}
{{--        <div class="modal fade" id="productModal" tabindex="-1" role="dialog">--}}
{{--            <div class="modal-dialog" role="document">--}}
{{--                <div class="modal-content">--}}
{{--                    <div class="modal-header">--}}
{{--                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
{{--                    </div>--}}
{{--                    <div class="modal-body">--}}
{{--                        <div class="modal-product clearfix">--}}
{{--                            <div class="product-images">--}}
{{--                                <div class="main-image images">--}}
{{--                                    <img alt="" src="{{ asset('img/product/quickview.jpg') }}') }}">--}}
{{--                                </div>--}}
{{--                            </div><!-- .product-images -->--}}

{{--                            <div class="product-info">--}}
{{--                                <h1 id="mName">{{$menu ->id}}</h1>--}}
{{--                                <div class="price-box-3">--}}
{{--                                    <div class="s-price-box">--}}
{{--                                        <span class="new-price">£160.00</span>--}}
{{--                                        <span class="old-price">£190.00</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <a href="single-product-left-sidebar.html" class="see-all">See all features</a>--}}
{{--                                <div class="quick-add-to-cart">--}}
{{--                                    <form method="post" class="cart">--}}
{{--                                        <div class="numbers-row">--}}
{{--                                            <input type="number" id="french-hens" value="3">--}}
{{--                                        </div>--}}
{{--                                        <button class="single_add_to_cart_button" type="submit">Add to cart</button>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                                <div class="quick-desc">--}}
{{--                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero.--}}
{{--                                </div>--}}
{{--                                <div class="social-sharing">--}}
{{--                                    <div class="widget widget_socialsharing_widget">--}}
{{--                                        <h3 class="widget-title-modal">Share this product</h3>--}}
{{--                                        <ul class="social-icons clearfix">--}}
{{--                                            <li>--}}
{{--                                                <a class="facebook" href="#" target="_blank" title="Facebook">--}}
{{--                                                    <i class="zmdi zmdi-facebook"></i>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a class="google-plus" href="#" target="_blank" title="Google +">--}}
{{--                                                    <i class="zmdi zmdi-google-plus"></i>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a class="twitter" href="#" target="_blank" title="Twitter">--}}
{{--                                                    <i class="zmdi zmdi-twitter"></i>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a class="pinterest" href="#" target="_blank" title="Pinterest">--}}
{{--                                                    <i class="zmdi zmdi-pinterest"></i>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a class="rss" href="#" target="_blank" title="RSS">--}}
{{--                                                    <i class="zmdi zmdi-rss"></i>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div><!-- .product-info -->--}}
{{--                        </div><!-- .modal-product -->--}}
{{--                    </div><!-- .modal-body -->--}}
{{--                </div><!-- .modal-content -->--}}
{{--            </div><!-- .modal-dialog -->--}}
{{--        </div>--}}
{{--        <!-- END Modal -->--}}
{{--    </div>--}}
<!-- END QUICKVIEW PRODUCT -->
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

<script>
    function aa(id,val) {
        let price = $('#pr'+id+'').html()
        let tol = Number(price)*val;
        $('#val'+id+'').html(tol);
        tolsum()

    }
    function tolsum() {
        let alltol = 0;
        for (let i =0 ; i< Number($('#countC').html());i++){
            console.log($('.ch'+i+'').html())
            alltol += Number($('.ch'+i+'').html());
        }
        $('#carttol').html(alltol);
        $('#total').html(alltol);
    }
    tolsum();
</script>


</html>
