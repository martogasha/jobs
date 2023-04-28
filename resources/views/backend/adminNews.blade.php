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
    <title>Horoscope Responsive HTML Template</title>
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
                        <li>
                            <a class="menu-button" href="{{url('adminMarket')}}">Marketplace </a>
                        </li>
                        <li style="background-color: cornflowerblue">
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
                                    <a href="{{url('postNews')}}"><button class="btn btn-info">Post News</button></a>
~
                                    @include('backend.phoneMenu')
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 hidden-xs">
                <div class="hs_navi_cart_wrapper">
                    <div class="dropdown-wrapper menu-button">
                        <a href="{{url('postNews')}}"><button class="btn btn-info">Post News</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- hs Navigation End -->
<!-- hs Slider Start -->
<div class="hs_indx_title_main_wrapper">
    <div class="hs_title_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width">
                <div class="hs_indx_title_left_wrapper">
                    <h2>News Updates</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width">
                <div class="hs_indx_title_right_wrapper">
                    <ul>
                        <li><a href="#">Home</a> &nbsp;&nbsp;&nbsp;> </li>
                        <li>News Categories</li>
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
                                    <img src="images/content/blog/bc1.jpg" alt="blog_img">
                                    <div class="hs_blog_Indx_date_wrapper">
                                        <ul>
                                            <li>29</li>
                                            <li>Oct</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="hs_blog_box1_cont_main_wrapper">
                                    <div class="hs_blog_cont_heading_wrapper">
                                        <h2>Rahu Enters Cancer and Ketu Enters Capricorn.</h2>
                                        <h4><span></span></h4>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit sequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet the
                                            mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                                        <h5><a href="#">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
                                    </div>
                                </div>
                                <div class="hs_blog_box1_bottom_cont_main_wrapper">
                                    <div class="hs_blog_box1_bottom_cont_left">
                                        <ul>
                                            <li><a href="#">by - Admin</a></li>
                                            <li><a href="#">1244 Likes</a></li>
                                            <li><a href="#">256 Comments</a></li>
                                            <li><a href="#">In News - Horoscope</a></li>
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
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="hs_blog_box1_main_wrapper hs_blog_box2_main_wrapper">
                                <div class="hs_blog_box1_img_wrapper">
                                    <div class="owl-carousel owl-theme">
                                        <div class="item">
                                            <img src="images/content/blog/bc2.jpg" alt="blog_img">
                                        </div>
                                        <div class="item">
                                            <img src="images/content/blog/bc3.jpg" alt="blog_img">
                                        </div>
                                        <div class="item">
                                            <img src="images/content/blog/bc1.jpg" alt="blog_img">
                                        </div>
                                    </div>
                                    <div class="hs_blog_Indx_date_wrapper">
                                        <ul>
                                            <li>29</li>
                                            <li>Oct</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="hs_blog_box1_cont_main_wrapper">
                                    <div class="hs_blog_cont_heading_wrapper">
                                        <h2>Rahu Enters Cancer and Ketu Enters Capricorn.</h2>
                                        <h4><span></span></h4>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit sequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet the
                                            mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                                        <h5><a href="#">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
                                    </div>
                                </div>
                                <div class="hs_blog_box1_bottom_cont_main_wrapper">
                                    <div class="hs_blog_box1_bottom_cont_left">
                                        <ul>
                                            <li><a href="#">by - Admin</a></li>
                                            <li><a href="#">1244 Likes</a></li>
                                            <li><a href="#">256 Comments</a></li>
                                            <li><a href="#">In News - Horoscope</a></li>
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
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="hs_blog_box1_main_wrapper hs_blog_box2_main_wrapper">
                                <div class="hs_blog_box1_img_wrapper">
                                    <iframe src="https://www.youtube.com/embed/tqYDVMTjAzY"></iframe>
                                    <div class="hs_blog_Indx_date_wrapper">
                                        <ul>
                                            <li>29</li>
                                            <li>Oct</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="hs_blog_box1_cont_main_wrapper">
                                    <div class="hs_blog_cont_heading_wrapper">
                                        <h2>Rahu Enters Cancer and Ketu Enters Capricorn.</h2>
                                        <h4><span></span></h4>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit sequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet the
                                            mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                                        <h5><a href="#">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
                                    </div>
                                </div>
                                <div class="hs_blog_box1_bottom_cont_main_wrapper">
                                    <div class="hs_blog_box1_bottom_cont_left">
                                        <ul>
                                            <li><a href="#">by - Admin</a></li>
                                            <li><a href="#">1244 Likes</a></li>
                                            <li><a href="#">256 Comments</a></li>
                                            <li><a href="#">In News - Horoscope</a></li>
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
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="hs_blog_box3_main_wrapper">
                                <div class="hs_blog_box3_left_cont_wrapper">
                                    <div class="hs_blog_quote">
                                        <i class="fa fa-quote-left"></i>
                                    </div>
                                    <div class="hs_blog_quote_cont">
                                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
                                    </div>
                                </div>
                                <div class="hs_blog_box3_right_cont_wrapper">
                                    <div class="hs_testi_client_main_wrapper hs_blog_box3_client_main_wrapper">
                                        <div class="hs_testi_client_cont_sec">
                                            <h2>Joan doe</h2>
                                            <p>Designer</p>
                                        </div>
                                        <div class="hs_testi_client_cont_img_sec">
                                            <img src="images/content/testi_client_img1.jpg" alt="testi_img" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="hs_blog_box1_main_wrapper hs_blog_box2_main_wrapper">
                                <div class="hs_blog_box1_img_wrapper">
                                    <img src="images/content/blog/bc3.jpg" alt="blog_img">
                                    <div class="hs_blog_Indx_date_wrapper">
                                        <ul>
                                            <li>29</li>
                                            <li>Oct</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="hs_blog_box1_cont_main_wrapper">
                                    <div class="hs_blog_cont_heading_wrapper">
                                        <h2>Rahu Enters Cancer and Ketu Enters Capricorn.</h2>
                                        <h4><span></span></h4>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit sequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet the
                                            mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                                        <h5><a href="#">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
                                    </div>
                                </div>
                                <div class="hs_blog_box1_bottom_cont_main_wrapper">
                                    <div class="hs_blog_box1_bottom_cont_left">
                                        <ul>
                                            <li><a href="#">by - Admin</a></li>
                                            <li><a href="#">1244 Likes</a></li>
                                            <li><a href="#">256 Comments</a></li>
                                            <li><a href="#">In News - Horoscope</a></li>
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
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="hs_blog_right_sidebar_main_wrapper">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="hs_blog_right_search_wrapper">
                                <input type="text" placeholder="Search">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="hs_blog_right_cate_list_heading_wrapper">
                                <h2>Blog CATEGORIES</h2>
                            </div>
                            <div class="hs_blog_right_cate_list_cont_wrapper">
                                <ul>
                                    <li><a href="#">Horoscope News</a></li>
                                    <li><a href="#">Astrology News</a></li>
                                    <li><a href="#">Events</a></li>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">Blog News</a></li>
                                    <li><a href="#">Puja Accessories</a></li>
                                    <li><a href="#">Religion Spiritual</a></li>
                                    <li><a href="#">Feng Shui Products</a></li>
                                    <li><a href="#">Lucky Stones</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="hs_blog_right_cate_list_heading_wrapper">
                                <h2>Recent News</h2>
                            </div>
                            <div class="hs_blog_right_recnt_cont_wrapper">
                                <div class="hs_footer_ln_img_wrapper">
                                    <img src="images/content/blog/b1.jpg" class="img-responsive" alt="ln_img" />
                                </div>
                                <div class="hs_footer_ln_cont_wrapper">
                                    <h4>Astrolger Member in the life soltion.</h4>
                                    <p>12 May 2022</p>
                                </div>
                            </div>
                            <div class="hs_blog_right_recnt_cont_wrapper">
                                <div class="hs_footer_ln_img_wrapper">
                                    <img src="images/content/blog/b2.jpg" class="img-responsive" alt="ln_img" />
                                </div>
                                <div class="hs_footer_ln_cont_wrapper">
                                    <h4>Astrolger Member in the life soltion.</h4>
                                    <p>12 May 2022</p>
                                </div>
                            </div>
                            <div class="hs_blog_right_recnt_cont_wrapper">
                                <div class="hs_footer_ln_img_wrapper">
                                    <img src="images/content/blog/b3.jpg" class="img-responsive" alt="ln_img" />
                                </div>
                                <div class="hs_footer_ln_cont_wrapper">
                                    <h4>Astrolger Member in the life soltion.</h4>
                                    <p>12 May 2022</p>
                                </div>
                            </div>
                            <div class="hs_blog_right_recnt_cont_wrapper">
                                <div class="hs_footer_ln_img_wrapper">
                                    <img src="images/content/blog/b4.jpg" class="img-responsive" alt="ln_img" />
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
<!-- hs testi slider wrapper End -->
<!-- hs advert wrapper Start -->

<!-- hs online slider wrapper End -->
<!-- hs footer wrapper Start -->
<!-- hs footer wrapper End -->
<!-- hs bottom footer wrapper Start -->
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

<!-- Mirrored from www.webstrot.com/html/horoscope/light_version/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Apr 2023 03:55:56 GMT -->
</html>

