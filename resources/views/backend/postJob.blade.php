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
    <title>Post Jobs - Briden Jobs Alert</title>
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
<div id="preloader">
    <div id="status"><img src="{{asset('images/header/horoscope.gif')}}" id="preloader_image" alt="loader">
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
                        <li style="background-color: cornflowerblue">
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
<!-- hs About Title Start -->
<div class="hs_indx_title_main_wrapper">
    <div class="hs_title_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width">
                <div class="hs_indx_title_left_wrapper">
                    <h2>Jobs Upload</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width">
                <div class="hs_indx_title_right_wrapper">
                    <ul>
                        <li><a href="#">Home</a> &nbsp;&nbsp;&nbsp;> </li>
                        <li>Jobs Upload</li>
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
                        <form action="{{url('pJob')}}" method="post">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Job Title</label>
                                    <input type="text" class="form-control" name="job_title" placeholder="Job Title">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Company</label>
                                    <input type="text" class="form-control" name="company" placeholder="Company">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Job Location</label>
                                    <input type="text" class="form-control" name="job_location" placeholder="Job Location">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Position</label>
                                    <input type="text" class="form-control" name="job_position" placeholder="Position">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Country</label>
                                <input type="text" class="form-control" name="country" placeholder="Country">
                            </div>

                                        <div class="form-group">
                                                <table class="table table-bordered table-hover" id="dynamic_field">
                                                    <tr>
                                                        <td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td>
                                                        <td><button type="button" name="add" id="add" class="btn btn-primary">Add More</button></td>
                                                    </tr>
                                                </table>
                                        </div>
                            <div class="form-group">
                                <label for="inputAddress2">Qualifications and Skills</label>
                                <input type="text" class="form-control" name="job_skills" placeholder="Qualifications and Skills">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">How To apply</label>
                                <input type="text" class="form-control" name="how_to_apply" placeholder="How To apply">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Link</label>
                                <input type="text" class="form-control" name="link" placeholder="Link">
                            </div>
                            <button type="submit" class="btn btn-primary">POST</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
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
             </div>
            </div>
        </div>
    </div>
<!-- hs sidebar End -->
<!-- hs online slider wrapper Start -->
<!-- hs online slider wrapper End -->
<!-- hs footer wrapper Start -->
@include('backend.footer')

<style>

    .comments .fade {
        position: absolute;
        bottom: 20px;
        left: 0;
        right: 0;
        height: 45px;
        background-image: -webkit-linear-gradient(top, rgba(245,245,245,0), rgba(245,245,245,1) 100%);
        z-index: 10;
    }
    .comment {
        padding: 15px;
    }
    .comments .comment img {
        display: inline-block;
        width: 50px;
        height: 50px;
        border-radius: 40px;
        opacity: 1;
        box-shadow: 0 0 2px #888;

    }
    .comments .comment .text {
        margin-left: 100px;
        font-size: 15px;
        position: relative;
        top: -40px;
        color: #888;
        margin-bottom: -55px;
    }
    .comment .text strong {
        color: #444;
        font-weight: 400;
    }
    .comment .text small {
        color: #aaa;
    }
</style>

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
<script>
    $(document).ready(function(){

        var i = 1;
        var length;
        //var addamount = 0;
        var addamount = 700;

        $("#add").click(function(){

            <!-- var rowIndex = $('#dynamic_field').find('tr').length;	 -->
            <!-- console.log('rowIndex: ' + rowIndex); -->
            <!-- console.log('amount: ' + addamount); -->
            <!-- var currentAmont = rowIndex * 700; -->
            <!-- console.log('current amount: ' + currentAmont); -->
            <!-- addamount += currentAmont; -->

            addamount += 700;
            console.log('amount: ' + addamount);
            i++;
            $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Job Description" class="form-control name_list"/></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
        });

        $(document).on('click', '.btn_remove', function(){
            addamount -= 700;
            console.log('amount: ' + addamount);

            <!-- var rowIndex = $('#dynamic_field').find('tr').length;	 -->
            <!-- addamount -= (700 * rowIndex); -->
            <!-- console.log(addamount); -->

            var button_id = $(this).attr("id");
            $('#row'+button_id+'').remove();
        });



        $("#submit").on('click',function(event){
            var formdata = $("#add_name").serialize();
            console.log(formdata);

            event.preventDefault()

            $.ajax({
                url   :"action.php",
                type  :"POST",
                data  :formdata,
                cache :false,
                success:function(result){
                    alert(result);
                    $("#add_name")[0].reset();
                }
            });

        });
    });
</script>

<!-- Mirrored from www.webstrot.com/html/horoscope/light_version/blog_categories.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Apr 2023 03:58:20 GMT -->
</html>
