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


<!-- Mirrored from www.webstrot.com/html/horoscope/light_version/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Apr 2023 03:54:50 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Home - Briden Jobs Alert</title>
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
    <link rel="stylesheet" type="text/css" href="css/sign_flaticon.css" />
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
@include('nav')
<!-- hs top header End -->
<!-- hs Navigation Start -->
<div class="hs_navigation_header_wrapper">
    @include('flash-message')

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <nav class="hs_main_menu hidden-xs">
                    <ul>
                        <li>
                            <div style="background-color: cornflowerblue">
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
                        <li>
                            <a class="menu-button" href="{{url('news')}}">News</a>
                        </li>
                    </ul>
                </nav>
            </div>
            @include('phoneMenu')
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
<!-- hs Navigation End -->
<!-- hs Slider Start -->
<div class="slider-area">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="carousel-captions caption-1" style="background: url(images/header/hires.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                <div class="content">
                                    <h2 data-animation="animated zoomInDown">FIND A <span>JOB</span></h2>
                                    <p data-animation="animated bounceInUp"></p>
                                    <div class="hs_effect_btn">
                                        <ul>
                                            <li data-animation="animated flipInX"><a href="{{url('jobs')}}" class="hs_btn_hover">Read more</a></li>
                                        </ul>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                                <div class="content_tabs">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="hs_slider_right_tabs_wrapper" data-animation="animated bounceInLeft hs_slider_tab_one">

                                                <div class="hs_slider_tabs_icon_cont_wrapper">
                                                    <ul>
                                                        <li><a href="{{url('jobs')}}" class="hs_tabs_btn">KENYA</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="hs_slider_right_tabs_wrapper hs_slider_right_tabs_wrapper2" data-animation="animated bounceInRight hs_slider_tab_tow">
                                                <div class="hs_slider_tabs_icon_cont_wrapper">
                                                    <ul>
                                                        <li><a href="{{url('jobs')}}" class="hs_tabs_btn">QATAR</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="hs_slider_right_tabs_wrapper hs_slider_right_tabs_wrapper2" data-animation="animated bounceInLeft hs_slider_tab_three">
                                                <div class="hs_slider_tabs_icon_cont_wrapper">
                                                    <ul>
                                                        <li><a href="{{url('jobs')}}" class="hs_tabs_btn">AUSTRALIA</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="hs_slider_right_tabs_wrapper hs_slider_right_tabs_wrapper2" data-animation="animated bounceInRight hs_slider_tab_four">
                                                <div class="hs_slider_tabs_icon_cont_wrapper">
                                                    <ul>
                                                        <li><a href="{{url('jobs')}}" class="hs_tabs_btn">DUBAI</a></li>
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
            <div class="item">
                <div class=" carousel-captions caption-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                <div class="content">
                                    <h2 data-animation="animated zoomInDown">cv <span>services</span></h2>
                                    <p data-animation="animated bounceInUp"></p>
                                    <div class="hs_effect_btn">
                                        <ul>
                                            <li data-animation="animated flipInX"><a href="{{url('cvs')}}" class="hs_btn_hover">Read more</a></li>
                                        </ul>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                                <div class="content_tabs">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="hs_slider_right_tabs_wrapper" data-animation="animated bounceInLeft hs_slider_tab_one">
                                                <div class="hs_slider_tabs_icon_cont_wrapper">
                                                    <ul>
                                                        <li><a href="{{url('cvs')}}" class="hs_tabs_btn">Cv Writting</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="hs_slider_right_tabs_wrapper hs_slider_right_tabs_wrapper2" data-animation="animated bounceInRight hs_slider_tab_tow">
                                                <div class="hs_slider_tabs_icon_cont_wrapper">
                                                    <ul>
                                                        <li><a href="{{url('cvs')}}" class="hs_tabs_btn">Cv Review</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="hs_slider_right_tabs_wrapper hs_slider_right_tabs_wrapper2" data-animation="animated bounceInLeft hs_slider_tab_three">
                                                <div class="hs_slider_tabs_icon_cont_wrapper">
                                                    <ul>
                                                        <li><a href="{{url('cvs')}}" class="hs_tabs_btn">Coverletter</a></li>
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
            <div class="item">
                <div class="carousel-captions caption-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                <div class="content">
                                    <h2 data-animation="animated zoomInDown">Our <span>Marketplace</span></h2>
                                    <p data-animation="animated bounceInUp"></p>
                                    <div class="hs_effect_btn">
                                        <ul>
                                            <li data-animation="animated flipInX"><a href="#" class="hs_btn_hover">Explore more</a></li>
                                        </ul>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                                <div class="content_tabs">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="hs_slider_right_tabs_wrapper hs_slider_right_tabs_wrapper2" data-animation="animated bounceInLeft hs_slider_tab_three">
                                                <div class="hs_slider_tabs_icon_wrapper">
                                                    <i class="flaticon-avatar"></i>
                                                </div>
                                                <div class="hs_slider_tabs_icon_cont_wrapper">
                                                    <ul>
                                                        <li><a href="#" class="hs_tabs_btn">Newest</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="hs_slider_right_tabs_wrapper" data-animation="animated bounceInLeft hs_slider_tab_one">
                                                <div class="hs_slider_tabs_icon_wrapper">
                                                    <i class="flaticon-horse-head"></i>
                                                </div>
                                                <div class="hs_slider_tabs_icon_cont_wrapper">
                                                    <ul>
                                                        <li><a href="#" class="hs_tabs_btn">Most Viewed</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="hs_slider_right_tabs_wrapper hs_slider_right_tabs_wrapper2" data-animation="animated bounceInRight hs_slider_tab_tow">
                                                <div class="hs_slider_tabs_icon_wrapper">
                                                    <i class="flaticon-home"></i>
                                                </div>
                                                <div class="hs_slider_tabs_icon_cont_wrapper">
                                                    <ul>
                                                        <li><a href="#" class="hs_tabs_btn">Popular</a></li>
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
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"><span class="number"></span></li>
                <li data-target="#carousel-example-generic" data-slide-to="1" class=""><span class="number"></span></li>
                <li data-target="#carousel-example-generic" data-slide-to="2" class=""><span class="number"></span></li>
            </ol>
            <div class="carousel-nevigation">
                <a class="prev" href="#carousel-example-generic" role="button" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                    <span>PR<br>EV</span>
                </a>
                <a class="next" href="#carousel-example-generic" role="button" data-slide="next">
                    <span>NE<br>XT</span>
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="hs_service_main_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="hs_about_heading_main_wrapper">
                    <div class="hs_about_heading_wrapper">
                        <h2>Our <span> services</span></h2>
                        <h4><span></span></h4>
                    </div>
                </div>
            </div>
            <div class="portfolio-area ptb-100">
                <div class="container">
                    <div class="portfolio-filter clearfix text-center">
                        <ul id="filter">
                            <li><a class="active" data-group="all">All</a></li>
                            <li><a data-group="business">CVs SERVICES</a></li>
                            <li><a data-group="website"> ONLINE CYBER Services</a></li>
                        </ul>
                    </div>
                    <div class="row">
                        <div id="gridWrapper" class="clearfix">
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 portfolio-wrapper III_column" data-groups='[ "business"]'>
                                <div class="hs_service_main_box_wrapper">
                                    <div class="hs_service_icon_main_wrapper">
                                        <div class="hs_service_icon_wrapper">
                                            <i class="flaticon-pregnancy"></i>
                                            <div class="btc_step_overlay"></div>
                                        </div>
                                    </div>
                                    <div class="hs_service_icon_cont_wrapper">
                                        <h2>CV Review</h2>
                                        <p></p>
                                        <h5><a href="#">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 portfolio-wrapper III_column" data-groups='["all","business"]'>
                                <div class="hs_service_main_box_wrapper">
                                    <div class="hs_service_icon_main_wrapper">
                                        <div class="hs_service_icon_wrapper" style="background: url(images/header/cw.jpg)">
                                        </div>
                                    </div>
                                    <div class="hs_service_icon_cont_wrapper">
                                        <h2>CV Writting</h2>
                                        <h5><a href="#">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 portfolio-wrapper III_column" data-groups='["all","business"]'>
                                <div class="hs_service_main_box_wrapper">
                                    <div class="hs_service_icon_main_wrapper">
                                        <div class="hs_service_icon_wrapper" style="background: url(images/header/cl.jpg)">
                                        </div>
                                    </div>
                                    <div class="hs_service_icon_cont_wrapper">
                                        <h2>Coverletter</h2>
                                        <h5><a href="#">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 portfolio-wrapper III_column" data-groups='["all", "website"]'>
                                <div class="hs_service_main_box_wrapper">
                                    <div class="hs_service_icon_main_wrapper">
                                        <div class="hs_service_icon_wrapper" style="background: url(images/header/p.jpg)">
                                        </div>
                                    </div>
                                    <div class="hs_service_icon_cont_wrapper">
                                        <h2>Passport Services</h2>
                                        <h5><a href="#">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 portfolio-wrapper III_column" data-groups='["all", "website"]'>
                                <div class="hs_service_main_box_wrapper">
                                    <div class="hs_service_icon_main_wrapper">
                                        <div class="hs_service_icon_wrapper" style="background: url(images/header/k.jpg)">
                                        </div>
                                    </div>
                                    <div class="hs_service_icon_cont_wrapper">
                                        <h2>Kra Services</h2>
                                        <h5><a href="#">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 portfolio-wrapper III_column" data-groups='["all", "website"]'>
                                <div class="hs_service_main_box_wrapper">
                                    <div class="hs_service_icon_main_wrapper">
                                        <div class="hs_service_icon_wrapper" style="background: url(images/header/t.jpg)">
                                        </div>
                                    </div>
                                    <div class="hs_service_icon_cont_wrapper">
                                        <h2>Typing Jobs</h2>
                                        <h5><a href="#">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 portfolio-wrapper III_column" data-groups='["all","website"]'>
                                <div class="hs_service_main_box_wrapper">
                                    <div class="hs_service_icon_main_wrapper">
                                        <div class="hs_service_icon_wrapper" style="background: url(images/header/g.jpg)">
                                        </div>
                                    </div>
                                    <div class="hs_service_icon_cont_wrapper">
                                        <h2>Goverment Services</h2>
                                        <h5><a href="#">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 portfolio-wrapper III_column" data-groups='["all", "website"]'>
                                <div class="hs_service_main_box_wrapper">
                                    <div class="hs_service_icon_main_wrapper">
                                        <div class="hs_service_icon_wrapper" style="background: url(images/header/n.jpg)">
                                        </div>
                                    </div>
                                    <div class="hs_service_icon_cont_wrapper">
                                        <h2>NTSA Services</h2>
                                        <h5><a href="#">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--/#gridWrapper-->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <!--/.portfolio-area-->
        </div>
    </div>
</div>
<!-- hs service wrapper End -->
<!-- hs news slider wrapper Start -->
<!-- hs news slider wrapper End -->
<!-- hs latest news wrapper Start -->
{{--<div class="hs_latest_news_main_wrapper">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                <div class="hs_about_heading_main_wrapper">--}}
{{--                    <div class="hs_about_heading_wrapper">--}}
{{--                        <h2>Latest <span> News</span></h2>--}}
{{--                        <h4><span></span></h4>--}}
{{--                        <p></p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">--}}
{{--                <div class="hs_lest_news_box_wrapper">--}}
{{--                    <div class="hs_lest_news_img_wrapper">--}}
{{--                        <img src="images/content/news_img1.jpg" alt="blog_img">--}}
{{--                        <div class="hs_lest_news_date_wrapper">--}}
{{--                            <ul>--}}
{{--                                <li>25</li>--}}
{{--                                <li>DEC</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="hs_lest_news_cont_wrapper">--}}
{{--                        <h5>Proin gravida nibh vel velit auctor aliquet.</h5>--}}
{{--                        <p>Lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet.</p>--}}
{{--                        <h4><a href="#">Read More <i class="fa fa-long-arrow-right"></i></a></h4>--}}
{{--                    </div>--}}
{{--                    <div class="hs_lest_news_cont_bottom">--}}
{{--                        <div class="hs_lest_news_cont_bottom_left">--}}
{{--                            <p><a href="#">by - Admin</a></p>--}}
{{--                        </div>--}}
{{--                        <div class="hs_lest_news_cont_bottom_center">--}}
{{--                            <p><a href="#">1244 Likes</a></p>--}}
{{--                        </div>--}}
{{--                        <div class="hs_lest_news_cont_bottom_right">--}}
{{--                            <p><a href="#">04 Comm.</a></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">--}}
{{--                <div class="hs_lest_news_box_wrapper">--}}
{{--                    <div class="hs_lest_news_img_wrapper">--}}
{{--                        <img src="images/content/news_img2.jpg" alt="blog_img">--}}
{{--                        <div class="hs_lest_news_date_wrapper">--}}
{{--                            <ul>--}}
{{--                                <li>25</li>--}}
{{--                                <li>DEC</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="hs_lest_news_cont_wrapper">--}}
{{--                        <h5>Proin gravida nibh vel velit auctor aliquet.</h5>--}}
{{--                        <p>Lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet.</p>--}}
{{--                        <h4><a href="#">Read More <i class="fa fa-long-arrow-right"></i></a></h4>--}}
{{--                    </div>--}}
{{--                    <div class="hs_lest_news_cont_bottom">--}}
{{--                        <div class="hs_lest_news_cont_bottom_left">--}}
{{--                            <p><a href="#">by - Admin</a></p>--}}
{{--                        </div>--}}
{{--                        <div class="hs_lest_news_cont_bottom_center">--}}
{{--                            <p><a href="#">1244 Likes</a></p>--}}
{{--                        </div>--}}
{{--                        <div class="hs_lest_news_cont_bottom_right">--}}
{{--                            <p><a href="#">04 Comm.</a></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">--}}
{{--                <div class="hs_lest_news_box_wrapper">--}}
{{--                    <div class="hs_lest_news_img_wrapper">--}}
{{--                        <img src="images/content/news_img3.jpg" alt="blog_img">--}}
{{--                        <div class="hs_lest_news_date_wrapper">--}}
{{--                            <ul>--}}
{{--                                <li>25</li>--}}
{{--                                <li>DEC</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="hs_lest_news_cont_wrapper">--}}
{{--                        <h5>Proin gravida nibh vel velit auctor aliquet.</h5>--}}
{{--                        <p>Lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet.</p>--}}
{{--                        <h4><a href="#">Read More <i class="fa fa-long-arrow-right"></i></a></h4>--}}
{{--                    </div>--}}
{{--                    <div class="hs_lest_news_cont_bottom">--}}
{{--                        <div class="hs_lest_news_cont_bottom_left">--}}
{{--                            <p><a href="#">by - Admin</a></p>--}}
{{--                        </div>--}}
{{--                        <div class="hs_lest_news_cont_bottom_center">--}}
{{--                            <p><a href="#">1244 Likes</a></p>--}}
{{--                        </div>--}}
{{--                        <div class="hs_lest_news_cont_bottom_right">--}}
{{--                            <p><a href="#">04 Comm.</a></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- hs latest news wrapper End -->
<!-- hs Counter wrapper Start -->
<div class="hs_counter_main_wrapper">
    <div class="hs_counter_cont_wrapper hs_counter_cont_wrapper1">
        <div class="count-description">
            <div class="hs_main_cycle_main">
                <span class="timer">25</span>
            </div>
            <h5 class="con1">Trusted by<br> Million Clients</h5>
        </div>
    </div>
    <div class="hs_counter_cont_wrapper">
        <div class="count-description">
            <div class="hs_main_cycle_main">
                <span class="timer">73</span>
            </div>
            <h5 class="con2">Years of<br> Experience
            </h5>
        </div>
    </div>
    <div class="hs_counter_cont_wrapper">
        <div class="count-description">
            <div class="hs_main_cycle_main">
                <span class="timer">45</span>
            </div>
            <h5 class="con3">Types of <br> Horoscopes
            </h5>
        </div>
    </div>
    <div class="hs_counter_cont_wrapper">
        <div class="count-description">
            <div class="hs_main_cycle_main">
                <span class="timer">99</span>
            </div>
            <h5 class="con4">Qualified <br> Astrologers
            </h5>
        </div>
    </div>
    <div class="hs_counter_cont_wrapper hs_counter_cont_wrapper5">
        <div class="count-description">
            <div class="hs_main_cycle_main">
                <span class="timer">89</span>
            </div>
            <h5 class="con4">Sucess<br> Horoscope
            </h5>
        </div>
    </div>
</div>
<!-- hs Counter wrapper End -->
<!-- hs testi slider wrapper Start -->
<div class="hs_testi_slider_main_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="hs_about_heading_main_wrapper">
                    <div class="hs_about_heading_wrapper">
                        <h2>What clients <span> are saying</span></h2>
                        <h4><span></span></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="hs_testi_slider_wrapper">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="hs_testi_cont_main_wrapper">
                                        <div class="hs_testi_cont_inner_wrapper">
                                            <div class="hs_testi_quote_wrapper">
                                                <i class="fa fa-quote-left"></i>
                                            </div>
                                            <div class="hs_testi_quote_cont_wrapper">
                                                <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hs_testi_client_main_wrapper">
                                        <div class="hs_testi_client_cont_sec">
                                            <h2>Joan doe</h2>
                                            <p>Designer</p>
                                        </div>
                                        <div class="hs_testi_client_cont_img_sec">
                                            <img src="images/content/testi_client_img1.jpg" alt="testi_img" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 hidden-xs">
                                    <div class="hs_testi_cont_main_wrapper hs_testi_cont_main_right_wrapper">
                                        <div class="hs_testi_cont_inner_wrapper">
                                            <div class="hs_testi_quote_wrapper">
                                                <i class="fa fa-quote-left"></i>
                                            </div>
                                            <div class="hs_testi_quote_cont_wrapper">
                                                <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hs_testi_client_main_wrapper hs_testi_client_main_right_wrapper">
                                        <div class="hs_testi_client_cont_img_sec">
                                            <img src="images/content/testi_client_img2.jpg" alt="testi_img" />
                                        </div>
                                        <div class="hs_testi_client_cont_sec">
                                            <h2>Joan doe</h2>
                                            <p>Designer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 hidden-xs">
                                    <div class="hs_testi_cont_main_wrapper">
                                        <div class="hs_testi_cont_inner_wrapper">
                                            <div class="hs_testi_quote_wrapper">
                                                <i class="fa fa-quote-left"></i>
                                            </div>
                                            <div class="hs_testi_quote_cont_wrapper">
                                                <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hs_testi_client_main_wrapper">
                                        <div class="hs_testi_client_cont_sec">
                                            <h2>Joan doe</h2>
                                            <p>Designer</p>
                                        </div>
                                        <div class="hs_testi_client_cont_img_sec">
                                            <img src="images/content/testi_client_img1.jpg" alt="testi_img" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="hs_testi_cont_main_wrapper hs_testi_cont_main_right_wrapper">
                                        <div class="hs_testi_cont_inner_wrapper">
                                            <div class="hs_testi_quote_wrapper">
                                                <i class="fa fa-quote-left"></i>
                                            </div>
                                            <div class="hs_testi_quote_cont_wrapper">
                                                <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hs_testi_client_main_wrapper hs_testi_client_main_right_wrapper">
                                        <div class="hs_testi_client_cont_img_sec">
                                            <img src="images/content/testi_client_img2.jpg" alt="testi_img" />
                                        </div>
                                        <div class="hs_testi_client_cont_sec">
                                            <h2>Joan doe</h2>
                                            <p>Designer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12  hidden-xs">
                                    <div class="hs_testi_cont_main_wrapper">
                                        <div class="hs_testi_cont_inner_wrapper">
                                            <div class="hs_testi_quote_wrapper">
                                                <i class="fa fa-quote-left"></i>
                                            </div>
                                            <div class="hs_testi_quote_cont_wrapper">
                                                <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hs_testi_client_main_wrapper">
                                        <div class="hs_testi_client_cont_sec">
                                            <h2>Joan doe</h2>
                                            <p>Designer</p>
                                        </div>
                                        <div class="hs_testi_client_cont_img_sec">
                                            <img src="images/content/testi_client_img1.jpg" alt="testi_img" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="hs_testi_cont_main_wrapper hs_testi_cont_main_right_wrapper">
                                        <div class="hs_testi_cont_inner_wrapper">
                                            <div class="hs_testi_quote_wrapper">
                                                <i class="fa fa-quote-left"></i>
                                            </div>
                                            <div class="hs_testi_quote_cont_wrapper">
                                                <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hs_testi_client_main_wrapper hs_testi_client_main_right_wrapper">
                                        <div class="hs_testi_client_cont_img_sec">
                                            <img src="images/content/testi_client_img2.jpg" alt="testi_img" />
                                        </div>
                                        <div class="hs_testi_client_cont_sec">
                                            <h2>Joan doe</h2>
                                            <p>Designer</p>
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
</div>
<!-- hs testi slider wrapper End -->
<!-- hs advert wrapper Start -->

<!-- hs online slider wrapper End -->
<!-- hs footer wrapper Start -->
@include('footer')
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
<script>
    $(document).ready(function () {
        $('#register').hide();

    })
    $('#registerButton').click(function () {
        $('#login').hide();
        $('#register').show();

    })
    $('#loginButton').click(function () {
        $('#register').hide();
        $('#login').show();

    })
    $('#regButton').click(function () {
        var first_name = $('#first_name').val();
        var last_name = $('#last_name').val();
        var email = $('#registerEmail').val();
        var password = $('#registerPassword').val();
        $.ajax({
            type:"get",
            url:"{{url('Register')}}",
            data:{'first_name':first_name,'last_name':last_name,'email':email,'password':password,},
            success:function (data) {
                $('#register').hide();
                $('#login').show();
            },
            error:function (error) {
                console.log(error)
                alert('error')

            }

        });

    });
</script>
<!-- Mirrored from www.webstrot.com/html/horoscope/light_version/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Apr 2023 03:55:56 GMT -->
</html>

