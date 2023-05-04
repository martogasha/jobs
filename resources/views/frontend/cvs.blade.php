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


<!-- Mirrored from www.webstrot.com/html/horoscope/light_version/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Apr 2023 03:56:52 GMT -->
<head>
    <meta charset="utf-8" />
    <title>About</title>
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
                        <li style="background-color: cornflowerblue">
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
<!-- hs Navigation End -->
<!-- hs About Title Start -->
<div class="hs_indx_title_main_wrapper">
    <div class="hs_title_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width">
                <div class="hs_indx_title_left_wrapper">
                    <h2>Very Good Cvs</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width">
                <div class="hs_indx_title_right_wrapper">
                    <ul>
                        <li><a href="#">Home</a> &nbsp;&nbsp;&nbsp;> </li>
                        <li>CVs</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- hs About Title End -->
<!-- hs about ind wrapper Start -->
<div class="hs_about_indx_main_wrapper hs_about_indx_inner_main_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="hs_about_left_img_wrapper">
                    <img src="images/content/about_img.jpg" alt="about_img" />
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="hs_about_right_cont_wrapper">
                    <h2>GET THE JOB YOU WANT with a very good cv</h2>
                    <p></p>
                    <h3>Contact Us</h3>
                    <h1>0795390602</h1>
                    <div class="hs_effect_btn hs_about_btn">
                        <ul>
                            <li><a href="#" class="hs_btn_hover">Read more</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- hs about ind wrapper End -->
<!-- hs Counter wrapper Start -->
<div class="hs_counter_main_wrapper">
    <div class="hs_counter_cont_wrapper hs_counter_cont_wrapper1">
        <div class="count-description">
            <div class="hs_main_cycle_main">
                <span class="timer">25</span>
            </div>
            <h5 class="con1">Trusted by<br> Hundreds Clients</h5>
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
            <h5 class="con3">Our <br> Customers
            </h5>
        </div>
    </div>
    <div class="hs_counter_cont_wrapper">
        <div class="count-description">
            <div class="hs_main_cycle_main">
                <span class="timer">99</span>
            </div>
            <h5 class="con4">Completed <br> Work
            </h5>
        </div>
    </div>
    <div class="hs_counter_cont_wrapper hs_counter_cont_wrapper5">
        <div class="count-description">
            <div class="hs_main_cycle_main">
                <span class="timer">89</span>
            </div>
            <h5 class="con4">Our Client<br> Testimonies
            </h5>
        </div>
    </div>
</div>
<!-- hs Counter wrapper End -->
<!-- hs about progress wrapper Start -->
<!-- hs about progress wrapper End -->
<!-- hs about video wrapper Start -->
<!-- hs about video wrapper End -->
<!-- hs service wrapper Start -->
<div class="hs_service_main_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="hs_about_heading_main_wrapper">
                    <div class="hs_about_heading_wrapper">
                        <h2>Our <span> services</span></h2>
                        <h4><span></span></h4>
                        <p></p>
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
                                        <h5><a href="https://wa.me/0714466088">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
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
                                        <h5><a href="https://wa.me/0714466088">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
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
                                        <h5><a href="https://wa.me/0714466088">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
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
                                        <h5><a href="https://wa.me/0714466088">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
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
                                        <h5><a href="https://wa.me/0714466088">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
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
                                        <h5><a href="https://wa.me/0714466088">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
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
                                        <h5><a href="https://wa.me/0714466088">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
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
                                        <h5><a href="https://wa.me/0714466088">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
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
<!-- hs astrology team wrapper Start -->
<!-- hs astrology team wrapper End -->
<!-- hs client slider wrapper Start -->
<!-- hs client slider wrapper End -->
<!-- hs online slider wrapper Start -->
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
<!-- Mirrored from www.webstrot.com/html/horoscope/light_version/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Apr 2023 03:56:58 GMT -->
</html>
