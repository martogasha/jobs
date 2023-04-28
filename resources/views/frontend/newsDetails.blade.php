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
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dlore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea odo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                            mollit anim id est labrum. Sed ut perspiciatis unde omnis iste natus error sit.<br><br>Voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore atis et quasi architecto
                                            beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit rnatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
                                            est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non mquam eius modi tempora incidunt ut labore et dolore.</p>

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="hs_blog_single_first_cont_wrapper">
                                                <p>Oluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore atis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                                                    sit rnatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
                                            </div>
                                        </div>
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
                            <div class="hs_kd_first_sec_wrapper hs_ar_third_sec_heading_wrapper">
                                <h2>Comments (04)</h2>
                                <h4><span></span></h4>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="hs_rs_comment_main_wrapper">
                                <div class="hs_rs_comment_img_wrapper">
                                    <img src="images/content/kundali/comm_img1.jpg" alt="comment_img">
                                </div>
                                <div class="hs_rs_comment_img_cont_wrapper hs_rs_blog_single_comment_img_cont_wrapper">
                                    <h2>Joahn Doe <span>Jan 2 , 2022 - Friday</span></h2>
                                    <p>The actor, director and producer, son to well-known stunt choreographer of Bollywood, rried to one of the most vivacious, bubbly, live-wire actress, is none other than our dashing Ajay Devgan, originally named Vishal
                                        Devgan !</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="hs_kd_five_heading_sec_wrapper">
                                <h2>Leave A Comment</h2>
                                <h4><span></span></h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="hs_kd_six_sec_input_wrapper">
                                <label>Name</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="hs_kd_six_sec_input_wrapper">
                                <label>Email</label>
                                <input type="email">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="hs_kd_six_sec_input_wrapper">
                                <label>Comments</label>
                                <textarea rows="6"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="hs_kd_six_sec_btn">
                                <ul>
                                    <li><a href="#">submit</a></li>
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
<!-- hs sidebar End -->
<!-- hs online slider wrapper Start -->
<div class="hs_online_main_slider_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="hs_online_slider_left_cont">
                    <h2>speak to <span>our expert !</span></h2>
                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="hs_online_slider_wrapper">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="hs_online_img_wrapper">
                                <img src="images/content/online1.jpg" alt="online_img" class="img-responsive" />
                                <span class="offline"></span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="hs_online_img_wrapper">
                                <img src="images/content/online2.jpg" alt="online_img" class="img-responsive" />
                                <span></span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="hs_online_img_wrapper">
                                <img src="images/content/online3.jpg" alt="online_img" class="img-responsive" />
                                <span class="offline"></span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="hs_online_img_wrapper">
                                <img src="images/content/online4.jpg" alt="online_img" class="img-responsive" />
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- hs online slider wrapper End -->
<!-- hs footer wrapper Start -->
<div class="hs_footer_main_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="hs_footer_logo_wrapper">
                    <img src="images/content/footer_logo.png" alt="footer_logo" class="img-responsive" />
                    <p>Donec id elit non mi porta gravida at eget metus. Donec id elit non Vestibulum id ligula porta felis euism od semper. Nulla vitae elit libero</p>
                    <h4><a href="#">Read More <i class="fa fa-long-arrow-right"></i></a></h4>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="hs_footer_help_wrapper">
                    <h2>Need <span>Our Help</span></h2>
                    <p>Need help with designing your brand new website or you have any idea and thinking of getting it’s branding done then get a FREE quote today.</p>
                    <div class="hs_footer_help_btn">
                        <ul>
                            <li><a href="#" class="hs_btn_hover">Free Quote</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="hs_footer_contact_wrapper">
                    <h2>Contact <span>Us Today</span></h2>
                    <p>Call Us <span>666 777 888</span> OR <span>111 222 333</span> Send an Email on <a href="#"><span class="__cf_email__" data-cfemail="f1929e9f85909285b19489909c819d94df929e9c">[email&#160;protected]</span></a> Visit Us 123 Fake Street- London 12358
                        <br>United Kingdom</p>
                    <div class="hs_footer_contact_input_wrapper">
                        <input type="text" placeholder="Email Address..."><i class="fa fa-envelope"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- hs footer wrapper End -->
<!-- hs bottom footer wrapper Start -->
<div class="hs_bottom_footer_main_wrapper">
    <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="footer_bottom_cont_wrapper">
                    <p>© Copyright 2022 by Horoscope. All right Reserved - Design By Webstrot</p>
                </div>
            </div>
        </div>
    </div>
</div>
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


<!-- Mirrored from www.webstrot.com/html/horoscope/light_version/blog_single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Apr 2023 03:58:20 GMT -->
</html>
