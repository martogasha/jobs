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
    <title>Dashboard - Briden Jobs Alert</title>
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
                            <div style="background-color: cornflowerblue">
                                <a class="menu-button" href="{{url('dashboard')}}">Dashboard</a>
                            </div>
                        </li>
                        <li>
                            <a class="menu-button" href="{{url('admin')}}">Users</a>
                        </li>
                        <li>
                            <a class="menu-button" href="{{url('adminJobs')}}">Jobs</a>
                        </li>
                        <li>
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
                @include('backend.phoneMenu')
            </div>
        </div>
    </div>
</div>
<!-- hs Navigation End -->
<!-- hs Slider Start -->
<div class="hs_blog_categories_main_wrapper">
<div id="root">
    <div class="container pt-5">
        <div class="row align-items-stretch">
            <div class="c-dashboardInfo col-lg-3 col-md-6">
                <div class="wrap">
                    <h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Users<svg
                            class="MuiSvgIcon-root-19" focusable="false" viewBox="0 0 24 24" aria-hidden="true" role="presentation">
                            <path fill="none" d="M0 0h24v24H0z"></path>
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z">
                            </path>
                        </svg></h4><span class="hind-font caption-12 c-dashboardInfo__count">{{\App\Models\User::count()}}</span>
                </div>
            </div>
            <div class="c-dashboardInfo col-lg-3 col-md-6">
                <div class="wrap">
                    <h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Jobs Posted<svg
                            class="MuiSvgIcon-root-19" focusable="false" viewBox="0 0 24 24" aria-hidden="true" role="presentation">
                            <path fill="none" d="M0 0h24v24H0z"></path>
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z">
                            </path>
                        </svg></h4><span class="hind-font caption-12 c-dashboardInfo__count">{{\App\Models\Job::count()}}</span>
                </div>
            </div>
            <div class="c-dashboardInfo col-lg-3 col-md-6">
                <div class="wrap">
                    <h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Products Posted<svg
                            class="MuiSvgIcon-root-19" focusable="false" viewBox="0 0 24 24" aria-hidden="true" role="presentation">
                            <path fill="none" d="M0 0h24v24H0z"></path>
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z">
                            </path>
                        </svg></h4><span class="hind-font caption-12 c-dashboardInfo__count">{{\App\Models\Product::count()}}</span>
                </div>
            </div>
            <div class="c-dashboardInfo col-lg-3 col-md-6">
                <div class="wrap">
                    <h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">News Posted<svg
                            class="MuiSvgIcon-root-19" focusable="false" viewBox="0 0 24 24" aria-hidden="true" role="presentation">
                            <path fill="none" d="M0 0h24v24H0z"></path>
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z">
                            </path>
                        </svg></h4><span class="hind-font caption-12 c-dashboardInfo__count">{{\App\Models\Blog::count()}}</span>
                </div>
            </div>
        </div>
    </div>
</div>
        </div>
<style>
    .c-dashboardInfo {
        margin-bottom: 15px;
    }
    .c-dashboardInfo .wrap {
        background: #ffffff;
        box-shadow: 2px 10px 20px rgba(0, 0, 0, 0.1);
        border-radius: 7px;
        text-align: center;
        position: relative;
        overflow: hidden;
        padding: 40px 25px 20px;
        height: 100%;
    }
    .c-dashboardInfo__title,
    .c-dashboardInfo__subInfo {
        color: #6c6c6c;
        font-size: 1.18em;
    }
    .c-dashboardInfo span {
        display: block;
    }
    .c-dashboardInfo__count {
        font-weight: 600;
        font-size: 2.5em;
        line-height: 64px;
        color: #323c43;
    }
    .c-dashboardInfo .wrap:after {
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 10px;
        content: "";
    }

    .c-dashboardInfo:nth-child(1) .wrap:after {
        background: linear-gradient(82.59deg, #00c48c 0%, #00a173 100%);
    }
    .c-dashboardInfo:nth-child(2) .wrap:after {
        background: linear-gradient(81.67deg, #0084f4 0%, #1a4da2 100%);
    }
    .c-dashboardInfo:nth-child(3) .wrap:after {
        background: linear-gradient(69.83deg, #0084f4 0%, #00c48c 100%);
    }
    .c-dashboardInfo:nth-child(4) .wrap:after {
        background: linear-gradient(81.67deg, #ff647c 0%, #1f5dc5 100%);
    }
    .c-dashboardInfo__title svg {
        color: #d7d7d7;
        margin-left: 5px;
    }
    .MuiSvgIcon-root-19 {
        fill: currentColor;
        width: 1em;
        height: 1em;
        display: inline-block;
        font-size: 24px;
        transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        user-select: none;
        flex-shrink: 0;
    }

</style>
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

