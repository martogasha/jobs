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


<!-- Mirrored from www.webstrot.com/html/horoscope/light_version/palm.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Apr 2023 03:57:27 GMT -->
<head>
    <meta charset="utf-8" />
    <title>{{$job->job_title}} - Briden Jobs Alert</title>
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
    <link rel="shortcut icon" type="image/png" href="{{asset('images/header/favicon.ico')}}" />
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
                        <li style="background-color: cornflowerblue">
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
                @include('phoneMenu')
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 hidden-xs">
                <div class="hs_navi_searchbar_wrapper">
                    <input type="text" placeholder="Search here">
                    <button><i class="fa fa-search"></i></button>
                </div>
                <div class="hs_navi_cart_wrapper">
                    <div class="dropdown-wrapper menu-button">
                        <a class="menu-button" href="#"><i class="flaticon-shop"></i></a>
                        <div class="drop-menu">

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
                    <h2>{{$job->job_title}}</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width">
                <div class="hs_indx_title_right_wrapper">
                    <ul>
                        <li><a href="{{url('dashboard')}}">Home</a> &nbsp;&nbsp;&nbsp;> </li>
                        <li><a href="{{url('jobs')}}">&nbsp;&nbsp;&nbsp;  Jobs</a> &nbsp;&nbsp;&nbsp;> </li>
                        <li>{{$job->job_title}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- hs About Title End -->
<!-- hs sidebar Start -->
<div class="hs_kd_sidebar_main_wrapper hs_num_sidebar_main_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="hs_kd_left_sidebar_main_wrapper">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="hs_kd_first_sec_wrapper">
                                <h2>{{$job->job_title}}</h2>
                                <h4><span></span></h4>
                                <br>
                                <h5><b style="font-size: 17px">Location</b>: {{$job->job_location}}</h5>
                                <hr>
                                <h5><b style="font-size: 17px">Company</b>: {{$job->company}}</h5>
                                <hr>
                                <h5><b style="font-size: 17px">Position</b>: {{$job->job_position}}</h5>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="hs_pr_tabs_menu_wrapper">
                                <ul class="nav nav-pills">
                                    <li class="active"><a data-toggle="pill" href="#home">Job Details</a></li>
                                    <li><a href="{{url('jobs')}}">Similar Jobs</a></li>

                                </ul>
                            </div>
                        </div>
                        @if(isset($job->title))
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="hs_pr_tabs_menu_cont_main_wrapper">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="tab-content">
                                                <div id="home" class="tab-pane fade in active">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="hs_pr_tabs_cont1_wrapper">
                                                                <h2>{{$job->title}}</h2>
                                                                <p>{{$job->desc}}</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endif
                        @if(isset($job->title_one))
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="hs_pr_tabs_menu_cont_main_wrapper">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="tab-content">
                                                <div id="home" class="tab-pane fade in active">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="hs_pr_tabs_cont1_wrapper">
                                                                <h2>{{$job->title_one}}</h2>
                                                                <p>{{$job->desc_one}}</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endif
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="hs_pr_tabs_menu_cont_main_wrapper">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="tab-content">
                                            <div id="home" class="tab-pane fade in active">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="hs_pr_tabs_cont1_wrapper">
                                                            <h2>Job Description/Requirements</h2>
                                                            <br>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <ul>
                                                                        <li>
                                                                            <div class="hs_pr_icon_wrapper">
                                                                                <i class="fa fa-circle"></i>
                                                                            </div>
                                                                            <div class="hs_pr_icon_cont_wrapper">
                                                                                {{$job->job_desc}}
                                                                            </div>
                                                                        </li>
                                                                        @if($job->bullet)
                                                                            <li>
                                                                                <div class="hs_pr_icon_wrapper">
                                                                                    <i class="fa fa-circle"></i>
                                                                                </div>
                                                                                <div class="hs_pr_icon_cont_wrapper">
                                                                                    {{$job->bullet}}
                                                                                </div>
                                                                            </li>
                                                                        @endif
                                                                        @if($job->bullet_one)
                                                                            <li>
                                                                                <div class="hs_pr_icon_wrapper">
                                                                                    <i class="fa fa-circle"></i>
                                                                                </div>
                                                                                <div class="hs_pr_icon_cont_wrapper">
                                                                                    {{$job->bullet_one}}
                                                                                </div>
                                                                            </li>
                                                                        @endif
                                                                        @if($job->bullet_two)
                                                                            <li>
                                                                                <div class="hs_pr_icon_wrapper">
                                                                                    <i class="fa fa-circle"></i>
                                                                                </div>
                                                                                <div class="hs_pr_icon_cont_wrapper">
                                                                                    {{$job->bullet_two}}
                                                                                </div>
                                                                            </li>
                                                                        @endif
                                                                        @if($job->bullet_three)
                                                                            <li>
                                                                                <div class="hs_pr_icon_wrapper">
                                                                                    <i class="fa fa-circle"></i>
                                                                                </div>
                                                                                <div class="hs_pr_icon_cont_wrapper">
                                                                                    {{$job->bullet_three}}
                                                                                </div>
                                                                            </li>
                                                                        @endif
                                                                        @if($job->bullet_four)
                                                                            <li>
                                                                                <div class="hs_pr_icon_wrapper">
                                                                                    <i class="fa fa-circle"></i>
                                                                                </div>
                                                                                <div class="hs_pr_icon_cont_wrapper">
                                                                                    {{$job->bullet_four}}
                                                                                </div>
                                                                            </li>
                                                                        @endif
                                                                        @if($job->bullet_five)
                                                                            <li>
                                                                                <div class="hs_pr_icon_wrapper">
                                                                                    <i class="fa fa-circle"></i>
                                                                                </div>
                                                                                <div class="hs_pr_icon_cont_wrapper">
                                                                                    {{$job->bullet_five}}
                                                                                </div>
                                                                            </li>
                                                                        @endif
                                                                        @if($job->bullet_six)
                                                                            <li>
                                                                                <div class="hs_pr_icon_wrapper">
                                                                                    <i class="fa fa-circle"></i>
                                                                                </div>
                                                                                <div class="hs_pr_icon_cont_wrapper">
                                                                                    {{$job->bullet_six}}
                                                                                </div>
                                                                            </li>
                                                                        @endif
                                                                        @if($job->bullet_seven)
                                                                            <li>
                                                                                <div class="hs_pr_icon_wrapper">
                                                                                    <i class="fa fa-circle"></i>
                                                                                </div>
                                                                                <div class="hs_pr_icon_cont_wrapper">
                                                                                    {{$job->bullet_seven}}
                                                                                </div>
                                                                            </li>
                                                                        @endif
                                                                        @if($job->bullet_eight)
                                                                            <li>
                                                                                <div class="hs_pr_icon_wrapper">
                                                                                    <i class="fa fa-circle"></i>
                                                                                </div>
                                                                                <div class="hs_pr_icon_cont_wrapper">
                                                                                    {{$job->bullet_eight}}
                                                                                </div>
                                                                            </li>
                                                                        @endif
                                                                        @if($job->bullet_nine)
                                                                            <li>
                                                                                <div class="hs_pr_icon_wrapper">
                                                                                    <i class="fa fa-circle"></i>
                                                                                </div>
                                                                                <div class="hs_pr_icon_cont_wrapper">
                                                                                    {{$job->bullet_nine}}
                                                                                </div>
                                                                            </li>
                                                                        @endif
                                                                        @if($job->bullet_ten)
                                                                            <li>
                                                                                <div class="hs_pr_icon_wrapper">
                                                                                    <i class="fa fa-circle"></i>
                                                                                </div>
                                                                                <div class="hs_pr_icon_cont_wrapper">
                                                                                    {{$job->bullet_ten}}
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
                            </div>
                        </div>
                        @if(isset($job->title_two))
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="hs_pr_tabs_menu_cont_main_wrapper">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="tab-content">
                                                <div id="home" class="tab-pane fade in active">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="hs_pr_tabs_cont1_wrapper">
                                                                <h2>{{$job->title_two}}</h2>
                                                                <p>{{$job->desc_two}}</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endif
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="hs_pr_tabs_menu_cont_main_wrapper">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="tab-content">
                                            <div id="home" class="tab-pane fade in active">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="hs_pr_tabs_cont1_wrapper">
                                                            <h2>Qualifications and Skills</h2>
                                                            <p>{{$job->job_skills}}</p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if($job->title_three)
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="hs_pr_tabs_menu_cont_main_wrapper">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="tab-content">
                                                <div id="home" class="tab-pane fade in active">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="hs_pr_tabs_cont1_wrapper">
                                                                <h2>{{$job->title_three}}</h2>
                                                                <p>{{$job->desc_three}}</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endif
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="hs_pr_tabs_menu_cont_main_wrapper">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="tab-content">
                                            <div id="home" class="tab-pane fade in active">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="hs_pr_tabs_cont1_wrapper">
                                                            <h2>How To Apply</h2>
                                                            <p>{{$job->how_to_apply}}</p>
                                                            <p><a href="{{$job->link}}" target="_blank" style="color:blue;">{{$job->link}}</a></p>
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
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="hs_kd_right_sidebar_main_wrapper">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="hs_blog_right_search_wrapper">
                                <input type="text" placeholder="Search">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="hs_blog_right_cate_list_heading_wrapper">
                                <h2>Job CATEGORIES</h2>
                            </div>
                            <div class="hs_blog_right_cate_list_cont_wrapper">
                                <ul>
                                    <li><a href="#">Kenya</a></li>
                                    <li><a href="#">Qatar</a></li>
                                    <li><a href="#">Australia</a></li>
                                    <li><a href="#">Uganda</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="hs_blog_right_cate_list_heading_wrapper">
                                <h2>Recent News</h2>
                            </div>
                            @foreach($bls as $bl)
                                <a href="{{url('newsDetail',$bl->id)}}">
                                    <div class="hs_blog_right_recnt_cont_wrapper">
                                        <div class="hs_footer_ln_img_wrapper">
                                            <img src="{{asset('uploads/product/'.$bl->image)}}" class="img-responsive" alt="ln_img" />
                                        </div>
                                        <div class="hs_footer_ln_cont_wrapper">
                                            <h4>{{\Illuminate\Support\Str::of($bl->title)->words(7)}}...</h4>
                                            <p>{{$bl->created_at->diffForHumans()}}</p>
                                        </div>
                                    </div>
                                </a>


                            @endforeach
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
<script src="{{asset('js/jquery.inview.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
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
<!-- Mirrored from www.webstrot.com/html/horoscope/light_version/palm.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Apr 2023 03:57:33 GMT -->
</html>
