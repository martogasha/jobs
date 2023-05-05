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


<!-- Mirrored from www.webstrot.com/html/horoscope/light_version/blog_categories.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Apr 2023 03:58:04 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Blog Categories</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Horoscope" />
    <meta name="keywords" content="Horoscope" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <!--srart theme style -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/fonts.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/flaticon.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.default.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/magnific-popup.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/reset.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}" />
    <!-- favicon links -->
    <link rel="shortcut icon" type="image/png" href="images/header/favicon.ico" />
</head>

<body>
<!-- preloader Start -->

<!-- hs top header Start -->
@include('nav')
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
                                <a class="menu-button" href="{{url('/')}}">Home</a>
                            </div>
                        </li>
                        <li>
                            <a class="menu-button" href="{{url('jobs')}}">Jobs</a>
                        </li>
                        <li>
                            <a class="menu-button" href="{{url('cvs')}}">Cvs </a>
                        </li>
                        <li>
                            <a class="menu-button" href="{{url('shop')}}">Marketplace </a>
                        </li>
                        <li style="background-color: cornflowerblue">
                            <a class="menu-button" href="{{url('news')}}">News</a>
                        </li>
                    </ul>
                </nav>
                @include('phoneMenu')
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 hidden-xs">
                <div class="hs_navi_searchbar_wrapper">
                    <input type="text" placeholder="Search here">
                    <button><i class="fa fa-search"></i></button>
                </div>
                <div class="hs_navi_cart_wrapper">
                    <div class="dropdown-wrapper menu-button">
                        <a class="menu-button" href="#"><i class="flaticon-shop"></i><span>3</span></a>
                        <div class="drop-menu">

                            <div class="cc_cart_wrapper1 menu-button">
                                <div class="cc_cart_img_wrapper">
                                    <img src="images/content/cart_img.jpg" alt="cart_img" />
                                </div>
                                <div class="cc_cart_cont_wrapper">
                                    <h4><a href="#">Gemstone</a></h4>
                                    <p>Quantity : 2 × $45</p>
                                    <h5>$90</h5>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                            </div>
                            <div class="cc_cart_wrapper1 menu-button">
                                <div class="cc_cart_img_wrapper">
                                    <img src="images/content/cart_img.jpg" alt="cart_img" />
                                </div>
                                <div class="cc_cart_cont_wrapper">
                                    <h4><a href="#">Gemstone</a></h4>
                                    <p>Quantity : 2 × $45</p>
                                    <h5>$90</h5>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                            </div>
                            <div class="cc_cart_wrapper1 menu-button">
                                <div class="cc_cart_img_wrapper">
                                    <img src="images/content/cart_img.jpg" alt="cart_img" />
                                </div>
                                <div class="cc_cart_cont_wrapper">
                                    <h4><a href="#">Gemstone</a></h4>
                                    <p>Quantity : 2 × $45</p>
                                    <h5>$90</h5>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                            </div>
                            <div class="cc_cart_wrapper1 menu-button">
                                <div class="hs_effect_btn ceckout_btn">
                                    <ul>
                                        <li><a href="#" class="hs_btn_hover">checkout</a></li>
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
<div class="hs_indx_title_main_wrapper">
    <div class="hs_title_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width">
                <div class="hs_indx_title_left_wrapper">
                    <h2>News Detail</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width">
                <div class="hs_indx_title_right_wrapper">
                    <ul>
                        <li><a href="#">Home</a> &nbsp;&nbsp;&nbsp;> </li>
                        <li>News Detail</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- hs About Title End -->
<!-- hs sidebar Start -->
<div class="hs_blog_categories_main_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="hs_blog_left_sidebar_main_wrapper">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="hs_blog_box1_main_wrapper">
                                <div class="hs_blog_box1_img_wrapper">
                                    <p>{{$detail->detail}}</p>

                                    <br>
                                    <img src="{{asset('uploads/product/'.$detail->image)}}" alt="" />
                                    <div class="hs_blog_Indx_date_wrapper">
                                        <ul>
                                            <li>29</li>
                                            <li>Oct</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="hs_blog_box1_cont_main_wrapper">
                                    <div class="hs_blog_cont_heading_wrapper">
                                        <h2>{{$detail->title}}</h2>
                                        <h4><span></span></h4>
                                        <p>{{$detail->detailTwo}} <a href="{{$detail->linkTwo}}" style="color: red">{{$detail->linkNameTwo}}</a> {{$detail->detailThree}}</p>


                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="hs_blog_single_first_cont_wrapper">
                                                <p>{{$detail->detailTitleOneLink}} <a href="{{$detail->linkThree}}" style="color: red">{{$detail->LinkNameThree}}</a> {{$detail->detailTitleOne}}</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="hs_blog_single_first_cont_wrapper">
                                                <p>{{$detail->detailTitleTwoLink}} <a href="{{$detail->titleTwo}}" style="color: red">{{$detail->titleTwoLinkName}}</a> {{$detail->detailTitleTwo}}</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hs_blog_box1_bottom_cont_main_wrapper">
                                    <div class="hs_blog_box1_bottom_cont_left">
                                        <ul>
                                            <li><a href="#">by - Admin</a></li>
                                            <li><a href="#">0 Likes</a></li>
                                            <li><a href="#">0 Comments</a></li>
                                            <li><a href="#">{{$detail->created_at->diffForHumans()}}</a></li>

                                        </ul>
                                    </div>
                                    <div class="hs_blog_box1_bottom_cont_right">
                                        <ul>
                                            <li>Share :</li>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="hs_blog_right_sidebar_main_wrapper">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="hs_blog_right_cate_list_heading_wrapper">
                                <h2>Recent News</h2>
                            </div>
                            <div class="hs_blog_right_recnt_cont_wrapper">
                                <div class="hs_footer_ln_img_wrapper">
                                    <img src="{{asset('images/content/blog/b1.jpg')}}" class="img-responsive" alt="ln_img" />
                                </div>
                                <div class="hs_footer_ln_cont_wrapper">
                                    <h4>Astrolger Member in the life soltion.</h4>
                                    <p>12 May 2022</p>
                                </div>
                            </div>
                            <div class="hs_blog_right_recnt_cont_wrapper">
                                <div class="hs_footer_ln_img_wrapper">
                                    <img src="{{asset('images/content/blog/b2.jpg')}}" class="img-responsive" alt="ln_img" />
                                </div>
                                <div class="hs_footer_ln_cont_wrapper">
                                    <h4>Astrolger Member in the life soltion.</h4>
                                    <p>12 May 2022</p>
                                </div>
                            </div>
                            <div class="hs_blog_right_recnt_cont_wrapper">
                                <div class="hs_footer_ln_img_wrapper">
                                    <img src="{{asset('images/content/blog/b3.jpg')}}" class="img-responsive" alt="ln_img" />
                                </div>
                                <div class="hs_footer_ln_cont_wrapper">
                                    <h4>Astrolger Member in the life soltion.</h4>
                                    <p>12 May 2022</p>
                                </div>
                            </div>
                            <div class="hs_blog_right_recnt_cont_wrapper">
                                <div class="hs_footer_ln_img_wrapper">
                                    <img src="{{asset('images/content/blog/b4.jpg')}}" class="img-responsive" alt="ln_img" />
                                </div>
                                <div class="hs_footer_ln_cont_wrapper">
                                    <h4>Astrolger Member in the life soltion.</h4>
                                    <p>12 May 2022</p>
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
<!-- hs online slider wrapper Start -->
<!-- hs online slider wrapper End -->
<!-- hs footer wrapper Start -->
@include('footer')

<!-- hs bottom footer wrapper End -->
<!--main js file start-->
<script data-cfasync="false" src="https://www.webstrot.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery_min.js"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/modernizr.js')}}"></script>
<script src="{{asset('js/jquery.menu-aim.js')}}"></script>
<script src="{{asset('js/parallax.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.js')}}"></script>
<script src="{{asset('js/jquery.shuffle.min.js')}}"></script>
<script src="{{asset('js/jquery.countTo.js')}}"></script>
<script src="{{asset('js/jquery.inview.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<!--main js file end-->
</body>


<!-- Mirrored from www.webstrot.com/html/horoscope/light_version/blog_single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Apr 2023 03:58:20 GMT -->
</html>
