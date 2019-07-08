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
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" media="all">
    <link rel="stylesheet" href="{{ asset('css/sweetalert.css') }}">
    <link rel="stylesheet" href="{{ asset('css/print.min.css') }}" >
    <!-- Nivo-slider css -->
    <link rel="stylesheet" href="{{ asset('lib/css/nivo-slider.css') }}">    <!-- This core.css') }} file contents all plugings css file. -->
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
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('js/print.min.js') }}"></script>

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
                                                            <div class="single-cart clearfix">
                                                                <div class="cart-img f-left">
                                                                    <a href="#">
                                                                        @if(\App\Menu::find($id)->image))
                                                                        <img src="{{ asset('storage/' .\App\Menu::find($id)->image) }}" width="100px" height="111px" alt="Cart Product" />
                                                                        @else
                                                                            <img src="{{ asset('img/cart/1.jpg') }}" width="100px" height="111px" alt="Cart Product" />
                                                                        @endif
                                                                    </a>
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
                                            @else
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
        <div class="breadcrumbs overlay-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcrumbs-inner">
                            <h1 class="breadcrumbs-title">product Cart view</h1>
                            <ul class="breadcrumb-list">
                                <li><a href="index.html">Home</a></li>
                                <li>product Cart view</li>
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
                                <a class="active" id="t1" href="" data-toggle="tab">
                                    <span>01</span>
                                    Shopping cart
                                </a>
                            </li>
                            <li>
                                <a href="#wishlist" id="t2" data-toggle="tab">
                                    <span>02</span>
                                    Ordered List
                                </a>
                            </li>
                            <li>
                                <a href="#order-complete" id="t3" data-toggle="tab">
                                    <span>03</span>
                                    Checkout complete
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
                                    <form action="{{ url('/staff/order') }}" method="GET">
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
                                                @if( session('cart') )
                                                    @for($i = 0; $i< count(session('cart'));$i++)
                                                        <input type="hidden" name="id{{array_values(session('cart'))[$i]}}" value="{{ array_values(session('cart'))[$i] }}">
                                                        <tr>
                                                            <td class="product-thumbnail">
                                                                <div class="pro-thumbnail-img">
                                                                    @if(\App\Menu::find(array_values(session('cart'))[$i])->image))
                                                                        <img src="{{ asset('storage/' .\App\Menu::find(array_values(session('cart'))[$i])->image) }}" alt="">
                                                                    @else
                                                                        <img src="{{ asset('img/cart/1.jpg') }}" alt="">
                                                                    @endif
                                                                </div>
                                                                <div class="pro-thumbnail-info text-left">
                                                                    <h6 class="product-title-2">
                                                                        <a href="#">{{\App\Menu::find(array_values(session('cart'))[$i])->name}}</a>
                                                                    </h6>
                                                                    <p>{{\App\Menu::find(array_values(session('cart'))[$i])->category->name}}</p>
                                                                </div>
                                                            </td>
                                                            <td class="product-price" id="pr{{array_values(session('cart'))[$i]}}">{{\App\Menu::find(array_values(session('cart'))[$i])->price}}</td>
                                                            <td class="product-quantity">
                                                                <div class="cart-plus-minus f-left">
                                                                    <input type="text" value="1" id="{{ array_values(session('cart'))[$i] }}" name="qtybutton" class="cart-plus-minus-box">
                                                                    <input type="hidden" name="count{{ array_values(session('cart'))[$i] }}" id="count{{ array_values(session('cart'))[$i] }}" value="1">
                                                                </div>
                                                            </td>
                                                            <td class="product-subtotal" ><span id="val{{ array_values(session('cart'))[$i] }}" class="ch{{ $i }}">{{\App\Menu::find(array_values(session('cart'))[$i])->price}}</span></td>

                                                            <td class="product-remove">
                                                                <a href="{{ url('/staff/removeI/'.array_keys(session('cart'))[$i]) }}"><i class="zmdi zmdi-close"></i></a>
                                                            </td>
                                                        </tr>
                                                        @endfor
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
                                                            <input type="hidden" id="billtol" name="billtol" value="0" >
                                                            <td class="order-total-price" id="total">0</td>
                                                        </tr>
                                                    </table>

                                                </div>
                                                <div class="col-md-10"></div>
                                                <div class="col-md-2 align-items-end">
                                                    <button class="submit-btn-1 black-bg btn-hover-2" >Order Menu</button>
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
                                    <form action="{{ url('staff/checkout') }}" name="frm" method="POST">
                                        @csrf
                                        <input type="hidden" id="pass" value="{{ request()->session()->get('staff_key')[0][1] }}">
                                        <div class="table-content table-responsive mb-50">
                                            <table class="text-center">
                                                <thead>
                                                <tr>
                                                    <th class="product-thumbnail">Product</th>
                                                    <th class="product-price">Price</th>
                                                    <th class="product-stock">Stock status</th>
                                                    <th class="product-remove">Count</th>
                                                    <th class="product-add-cart">Total</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <!-- tr -->
                                            @foreach(request()->session()->get('cart') as $i=>$id)
                                                <tr>
                                                    <td class="product-thumbnail">
                                                        <div class="pro-thumbnail-img">
                                                            <img src="{{ asset('img/product/7.jpg') }}" alt="">
                                                        </div>
                                                        <div class="pro-thumbnail-info text-left">
                                                            <h6 class="product-title-2">
                                                                <a href="#">{{\App\Menu::find($id)->name}}</a>
                                                            </h6>
                                                            <p>{{\App\Menu::find($id)->category->name}}</p>
                                                        </div>
                                                    </td>
                                                    <td class="product-price">{{\App\Menu::find($id)->price}}</td>
                                                    <td class="product-stock text-uppercase">in stoct</td>
                                                    <td class="product-remove">
                                                        <input type="text" value="{{ request()->session()->get('order')['count'.$id] }}" name="qty" class="cart-plus-minus-box">
                                                    </td>
                                                    <td class="product-add-cart">
                                                        <span id="tol{{ $id }}" class="ch{{ $i }}">{{request()->session()->get('order')['count'.$id] * \App\Menu::find($id)->price}}</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                                </tbody>
                                                <tfoot>
                                                <th class="text-center text-info h3" colspan="4">Total Bill</th>
                                                <th class="text-center text-blue h3" >{{ request()->session()->get('order')['billtol'] }}</th>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <div class="col-md-10"></div>
                                        <div class="col-md-2 align-items-end">
                                            <button type="button" class="submit-btn-1 black-bg btn-hover-2" onclick="checkAuth()">Check Out</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- wishlist end -->
                            <!-- order-complete start -->
                            <div class="tab-pane" id="order-complete">
                                @if(session('complete'))
                                <div class="order-complete-content box-shadow" id="printArea">
                                    <div class="thank-you p-30 text-center">
                                        <h6 class="text-black-5 mb-0">Thank you. Your order has been Checkout Completed.</h6>
                                    </div>
                                    <div class="order-info p-30 mb-10">
                                        <ul class="order-info-list">
                                            <li>
                                                <h6>Order no</h6>
                                                <p>{{ session('complete')[0]->id }}</p>
                                            </li>
                                            <li>
                                                <h6>Sale By</h6>
                                                <p>{{ session('complete')[0]->staff->name }}</p>
                                            </li>
                                            <li>
                                                <h6>Order Date</h6>
                                                <p>{{ session('complete')[0]->created_at }}</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="row">
                                        <!-- our order -->
                                        <div class="col-md-6">
                                            <div class="payment-details p-30">
                                                <h6 class="widget-title border-left mb-20">your order</h6>
                                                <table>
                                                    @foreach(session('cart') as $i=>$id)
                                                        <tr>
                                                            <td class="td-title-1">{{\App\Menu::find($id)->name}} x {{ session('order')['count'.$id] }}</td>
                                                            <td class="td-title-2">{{session('order')['count'.$id] * \App\Menu::find($id)->price}} Ks</td>
                                                        </tr>
                                                    @endforeach
                                                    <tr>
                                                        <td class="td-title-1">Cart Subtotal</td>
                                                        <td class="td-title-2">{{ session('order')['billtol'] }} Ks</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-title-1">Table Charged</td>
                                                        <td class="td-title-2">0 Ks</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-title-1">Tax</td>
                                                        <td class="td-title-2">0 Ks</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="order-total">Order Total</td>
                                                        <td class="order-total-price">{{ session('order')['billtol'] }} Ks</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="bill-details p-30">
                                                <h6 class="widget-title border-left mb-20">Restaurant details</h6>
                                                <ul class="bill-address">
                                                    <li>
                                                        <span>Name : </span>
                                                        Be Happy
                                                    </li>
                                                    <li>
                                                        <span>Address : </span>
                                                        No.7, Pyaw Tar Mue Street, Pyay, Bago
                                                    </li>
                                                    <li>
                                                        <span>Phone : </span>
                                                        (+880) 19453 821758
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="bill-details pl-30">
                                                <h6 class="widget-title border-left mb-20">our social link</h6>
                                                <ul class="bill-address">
                                                    <li>
                                                        <span>Facebook : </span>
                                                        https://www.facebook.com
                                                    </li>
                                                    <li>
                                                        <span>email:</span>
                                                        behappy@companyname.com
                                                    </li>
                                                    <li>
                                                        <span>Instagram : </span>
                                                        https://www.instagram.com/?hl=en
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="thank-you p-30 text-center">
                                    <div class="row">
                                        <div class="col-md-6 align-items-start">
                                            <button type="button" class="submit-btn-1 black-bg btn-hover-2" onclick="order_com()">Print</button>
                                        </div>
                                        <div class="col-md-6 align-items-end">
                                            <button type="button" class="submit-btn-1 black-bg btn-hover-2" onclick="order_clear()">Clear</button>
                                        </div>
                                    </div>
                                </div>
                                    @endif
                            </div>


                            <!-- order-complete end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SHOP SECTION END -->

    </section>

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
    tolsum();
    function aa(id,val) {
        let price = $('#pr'+id+'').html()
        let tol = Number(price)*val;
        $('#val'+id+'').html(tol);
        $('#tol'+id+'').html(tol);
        // $('#count'+id+'').val(val);
        tolsum()
        $('#qty'+id+'').val(val);
    }
    function tolsum() {

        let alltol = 0;

        for (let i =0 ; i< Number($('#countC').html());i++){
            alltol += Number($('.ch'+i+'').html());
        }
        // alert(alltol);
        $('#carttol').html(alltol);
        $('#total').html(alltol);
        $('#billtol').val(alltol);
    }

    function checkAuth() {
        swal({
            title: "Check Staff Password",
            text: "Please Enter Account Password",
            type: "input",
            showCancelButton: true,
            closeOnConfirm: false,
            inputPlaceholder: "Write something"
        }, function (inputValue) {
            if (inputValue === false) return false;
            if ( inputValue != $('#pass').val()) {
                swal.showInputError("Please Enter Staff Password");
                return false
            }else {
                swal("Nice!", "Checkout Success " , "success");
                frm.submit();
            }

        });
    }

    function order_com() {
        printJS({
            printable: 'printArea',
            type: 'html',
            targetStyles: ['*']
        })
    }
    function order_clear() {
        location.href = '/staff/done';
    }



</script>
@if(session('order'))
    <script>
        $('#t1').removeClass('active');
        $('#t2').addClass('active');
        $('.cart-tab a[href="#wishlist"]').tab('show');
    </script>
@endif
@if(session('complete'))
    <script>
        $('#t2').removeClass('active');
        $('#t2').removeAttr('href');
        $('#t3').addClass('active');
        $('.cart-tab a[href="#order-complete"]').tab('show');
    </script>
@endif
</html>
