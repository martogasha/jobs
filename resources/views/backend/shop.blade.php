<!DOCTYPE html>
<!--
Template Name: Horoscope
Version: 1.0.0
Author:
Website:
Purchase:
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--[endif]-->


<!-- Mirrored from www.webstrot.com/html/horoscope/light_version/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Apr 2023 03:57:50 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Our Shop - Briden Jobs Alert</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Horoscope" />
    <meta name="keywords" content="Horoscope" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <!--srart theme style -->
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="css/flaticon.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.css" />
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css" />
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
    <!-- favicon links -->
    <link rel="shortcut icon" type="image/png" href="images/header/favicon.ico" />
</head>

<body>
<!-- preloader Start -->
<div id="preloader">
    <div id="status"><img src="images/header/horoscope.gif" id="preloader_image" alt="loader">
    </div>
</div>
<!-- hs top header Start -->
@include('backend.nav')
<!-- hs top header End -->
<!-- hs Navigation Start -->
<div class="hs_navigation_header_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <nav class="hs_main_menu hidden-xs">
                    <ul>
                        <li>
                            <div>
                                <a class="menu-button" href="{{url('dashboard')}}">Dashboard</a>
                            </div>
                        </li>
                        <li>
                            <div>
                                <a class="menu-button" href="{{url('admin')}}">Users</a>
                            </div>
                        </li>
                        <li>
                            <a class="menu-button" href="{{url('adminJobs')}}">Jobs</a>
                        </li>
                        <li style="background-color: cornflowerblue">
                            <a class="menu-button" href="{{url('adminMarket')}}">Marketplace </a>
                        </li>
                        <li>
                            <a class="menu-button" href="{{url('adminNews')}}">News</a>
                        </li>
                    </ul>
                </nav>
                <header class="mobail_menu visible-xs" style="background-color: darkorange">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6">
                                <div class="hs_logo">
                                    <a href="{{url('dashboard')}}"><img src="images/header/ll.jpg" alt="Logo" title="Logo"></a>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6">
                                <div class="cd-dropdown-wrapper">
                                    <a href="{{url('postProduct')}}"><button class="btn btn-info">Post Product</button></a>

                                    @include('backend.phoneMenu')
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 hidden-xs">
                <div class="hs_navi_cart_wrapper">
                    <div class="dropdown-wrapper menu-button">
                        <a href="{{url('postProduct')}}"><button class="btn btn-info">Post Product</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

                    <!-- hs Navigation End -->
<!-- hs About Title Start -->
<div class="hs_indx_title_main_wrapper">
    <div class="hs_title_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width">
                <div class="hs_indx_title_left_wrapper">
                    <h2>My Shop</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width">
                <div class="hs_indx_title_right_wrapper">
                    <ul>
                        <li><a href="{{url('admin')}}">Dashboard</a> &nbsp;&nbsp;&nbsp;> </li>
                        <li>My Shop</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
                    @include('flash-message')

                    <!-- hs About Title End -->
<!-- hs sidebar Start -->
<div class="hs_blog_categories_main_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 visible-lg visible-md">
                <div class="hs_blog_right_sidebar_main_wrapper">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="hs_blog_right_cate_list_heading_wrapper">
                                <h2>CATEGORIES</h2>
                            </div>
                            <div class="hs_blog_right_cate_list_cont_wrapper">
                                <ul>
                                    <li><a href="#">Yantra</a></li>
                                    <li><a href="#">Gemstone</a></li>
                                    <li><a href="#">Books</a></li>
                                    <li><a href="#">Workshop DVD</a></li>
                                    <li><a href="#">Pendal</a></li>
                                    <li><a href="#">Puja Accessories</a></li>
                                    <li><a href="#">Religion Spiritual Gems Stones</a></li>
                                    <li><a href="#">Feng Shui Products</a></li>
                                    <li><a href="#">Lucky Stones</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="hs_blog_left_sidebar_main_wrapper">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="hs_shop_tabs_cont_sec_wrapper">
                                <div class="tab-content">
                                    <div id="home" class="tab-pane fade in active">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="hs_kd_first_sec_wrapper">
                                                    <h2>390+ Produts Search</h2>
                                                    <h4><span></span></h4>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="hs_kd_first_sec_cont_wrapper">
                                                    <ul>
                                                        <li>Sort by - <a href="#">Popularity</a></li>
                                                        <li>Price - <a href="#">High to Low</a></li>
                                                        <li>Date by - <a href="#">Newest First</a></li>
                                                    </ul>
                                                    <p class="hidden-xs">Pages : <span>1-12</span> of 390</p>
                                                </div>
                                            </div>
                                            @foreach($products as $product)
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="hs_shop_prodt_main_box">
                                                        <div class="hs_shop_prodt_img_wrapper">
                                                            <img src="{{asset('uploads/product/'.$product->imageOne)}}" alt="shop_product">
                                                            <a href="{{url('shopDetail',$product->id)}}">Add to Cart</a>
                                                        </div>
                                                        <div class="hs_shop_prodt_img_cont_wrapper">
                                                            <h2><a href="{{url('shopDetail',$product->id)}}">{{$product->product_title}}</a></h2>
                                                            <h3>Ksh <b>{{$product->product_amount}}</b></h3>
                                                            <h4>by <span>{{$product->user->first_name}}</span></h4>
                                                        </div>
                                                    </div>
                                                </div>

                                            @endforeach
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 visible-lg visible-md">
                                                <div class="pager_wrapper">
                                                    <ul class="pagination">
                                                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                                        <li class="btc_shop_pagi"><a href="#">01</a></li>
                                                        <li class="btc_shop_pagi"><a href="#">02</a></li>
                                                        <li class="btc_third_pegi btc_shop_pagi"><a href="#">03</a></li>
                                                        <li class="hidden-xs btc_shop_pagi"><a href="#">04</a></li>
                                                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 visible-sm visible-xs">
                <div class="hs_blog_right_sidebar_main_wrapper">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="hs_blog_right_search_wrapper">
                                <input type="text" placeholder="Products Search..">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="hs_blog_right_cate_list_heading_wrapper">
                                <h2>TOP CATEGORIES</h2>
                            </div>
                            <div class="hs_blog_right_cate_list_cont_wrapper">
                                <ul>
                                    <li><a href="#">Yantra</a></li>
                                    <li><a href="#">Gemstone</a></li>
                                    <li><a href="#">Books</a></li>
                                    <li><a href="#">Workshop DVD</a></li>
                                    <li><a href="#">Pendal</a></li>
                                    <li><a href="#">Puja Accessories</a></li>
                                    <li><a href="#">Religion Spiritual Gems Stones</a></li>
                                    <li><a href="#">Feng Shui Products</a></li>
                                    <li><a href="#">Lucky Stones</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="hs_blog_right_cate_list_heading_wrapper">
                                <h2>New Products</h2>
                            </div>
                            <div class="hs_blog_right_cate_list_cont_wrapper">
                                <ul>
                                    <li><a href="#">Lucky Bag</a></li>
                                    <li><a href="#">Numerology Kavach Ring</a></li>
                                    <li><a href="#">Pyramids</a></li>
                                    <li><a href="#">Puja Services</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="hs_kd_right_first_sec_wrapper2">
                                <div class="hs_kd_right_first_sec_heading">
                                    <h2>Black magic</h2>
                                </div>
                                <div class="hs_kd_right_first_sec_img_heading">
                                    <img src="images/content/kundali/patrika3.jpg" alt="patrika" />
                                </div>
                                <div class="hs_kd_right_first_sec_img_price_heading">
                                    <ul>
                                        <li>Kundli Patrika</li>
                                        <li>$26</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 visible-sm visible-xs">
                            <div class="pager_wrapper">
                                <ul class="pagination">
                                    <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                    <li class="btc_shop_pagi"><a href="#">01</a></li>
                                    <li class="btc_shop_pagi"><a href="#">02</a></li>
                                    <li class="btc_third_pegi btc_shop_pagi"><a href="#">03</a></li>
                                    <li class="hidden-xs btc_shop_pagi"><a href="#">04</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- hs sidebar End -->
<!-- hs client slider wrapper Start -->
<!-- hs client slider wrapper End -->
<!-- hs online slider wrapper Start -->
<!-- hs online slider wrapper End -->
<!-- hs footer wrapper Start -->
@include('backend.footer')

<!-- hs bottom footer wrapper End -->
<!--main js file start-->
<script data-cfasync="false" src="https://www.webstrot.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery_min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/jquery.menu-aim.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/jquery.shuffle.min.js"></script>
<script src="js/jquery.countTo.js"></script>
<script src="js/jquery.inview.min.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/custom.js"></script>
<!--main js file end-->
</body>


<!-- Mirrored from www.webstrot.com/html/horoscope/light_version/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Apr 2023 03:57:59 GMT -->
</html>
