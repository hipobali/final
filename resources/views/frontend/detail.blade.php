@extends('layouts.frontend.app')
@include('layouts.frontend.nav')
@section('title')
Detail
@endsection
@section('extra_css')
    <link href="{{asset('css/news.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/welcomeCss/slick-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/welcomeCss/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/modal_for_details.css')}}">
    <link rel="stylesheet" href="{{asset('css/welcomeCss/news.css')}}">
    <link rel="stylesheet" href="{{asset('css/btn.css')}}">
@endsection
@section('content')

    <div id="news">
        <div class="news_mv ">
            <div class="mv_parent">
                <div class="mv_child">
                    <p>“We Rise By Lifting Others”</p>
                </div>
            </div>
        </div>

        <button class="to-top" onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        <div class="container mt-4 mb-4">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                            <div class="card-header">
                                <h4 class="ml-2 mt-3" > <img class="foundation_people" src="{{url('uploads/'.$foundationPost->foundation->foundation_profile)}}"  alt="people" width="100" height="100" style="border-radius: 50px;" > &emsp;{{$foundationPost->foundation->foundation_name}}</h4>
                            </div>
                        <div class="card-body ">
                            <div class="text-center">
                            @if($foundationPost->user_post_id==0)
                            <img class="mb-4" src="{{url('uploads/'.$foundationPost->f_post_image)}}" width="50%" height="auto">
                        @elseif($foundationPost->user_post_id==$foundationPost->userPost->id)
                            <img class="mb-4" src="{{url('uploads/'.$foundationPost->userPost->image)}}" width="50%" height="auto">
                        @endif
                            </div>
                        <p  class="aa  modal_p" style="white-space:pre-line;">  {{$foundationPost->f_post_detail}}</p>
                        <div class="float-right">
                            <a style="background-color:#ff9500" href="{{route('get_donation_form',$foundationPost->id)}}" type="button" class="btn btn-primary">Donate Now</a>
                        </div>
                       
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="modal-content">
                        <div class="modal-body">

                            <div class="card testimonial-card" style="background-color:lightgoldenrodyellow">
                                <div class="card-up indigo lighten-1"></div>

                                <div class="avatar mx-auto white mt-3">
                                    <img  src="{{url('uploads/'.$foundationPost->foundation->foundation_profile)}}" class="img-fluid" height="auto" width="200" alt="foundation avatar">
                                </div>

                                <div class="card-body">

                                    <h4 class="card-title"><i class="fa fa-user-alt "></i>&nbsp;{{$foundationPost->foundation->foundation_name}}</h4>
                                    <hr>

                                    <form class="form-horizontal">

                                        <div class="form-group row">
                                            <label class="col-4">{{__('common.email')}}</label>
                                            <p  class="col-8"> :&nbsp;&nbsp;{{$foundationPost->user->email}}</p>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-4">{{__('common.president_name')}}</label>
                                            <p class="col-8"> :&nbsp;&nbsp;{{$foundationPost->foundation->president_name}}</p>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-4">{{__('common.member_count')}}</label>
                                            <p class="col-8"> :&nbsp;&nbsp;{{$foundationPost->foundation->member_count}}</p>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-4">{{__('common.address')}}</label>
                                            <p class="col-8"> :&nbsp;&nbsp;{{$foundationPost->foundation->address}}</p>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-4">{{__('common.phone')}}</label>
                                            <p class="col-8"> :&nbsp;&nbsp;{{$foundationPost->foundation->phone}}</p>
                                        </div>

                                    </form>
                                </div>

                            </div>
                            <!-- Card -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer >
            <a style="text-decoration:none;" class="logo" href="/">
                <img class="logo_img" src="{{asset('img/news_post/logo.png')}}" alt="">
            </a>
            <div class="footer_menu">
            <a style="text-decoration:none;" href="{{url('donor/home')}}">{{__('common.home')}}</a><a style="text-decoration:none;" href="{{url('User/about_us')}}">{{__('common.about')}}</a><a style="text-decoration:none;" href="{{url('User/ContactUs')}}">{{__('common.contact')}}</a><a style="text-decoration:none;" href="{{url('User/termsandconditions')}}">{{__('common.terms_and_conditions')}}</a>
            </div>
            <p class="txt_copyright">2019© All Rights Reserved. EasyDonateMyanmar.com</p>
            <div class="social_menu">
                <a href="https://www.facebook.com/လႉမယ္လြယ္လြယ္-107640630579396/?eid=ARC2LdA06F1AyHQq1mdN21B5l-UqxelPvIbCylgzcBKfmwfx4Mbyc-I0Z0qL0tuLCr9EkYdW9WAS7nPI">
                    <img src="{{asset('img/news_post/icon_fb.png')}}" alt="" width="42" height="42">
                </a>
                <a href="https://twitter.com/DonateEasy">
                    <img src="{{asset('img/news_post/icon_twitter.png')}}" alt="" width="42" height="42">
                </a>
                <a href="https://www.instagram.com/">
                    <img src="{{asset('img/news_post/icon_ig.png')}}" alt="" width="42" height="42">
                </a>
            </div>
        </footer>

        <!-- end of footer -->
    </div>
    <script type="text/javascript" src="{{asset('js/welcomeJs/jquery.js')}}"></script>
    <script src="https://kit.fontawesome.com/85e4b02581.js"></script>
    <script type="text/javascript" src="{{asset('js/welcomeJs/slick.min.js')}}"></script>
    <script>
        $(document).ready(function() {

            // $("html").removeAttr('style');

            $(".drop_link").click(function() {
                if ($('.drop_link').hasClass('is_click')) {
                    $('.nav-dropdown').removeClass('show_drop');
                    $(this).removeClass('is_click');

                } else {
                    $(".drop_link").addClass("is_click");
                    $('.nav-dropdown').addClass('show_drop');
                };
            });
            $(".drop_link_login").click(function() {
                if ($('.drop_link_login').hasClass('is_click')) {
                    $('.nav-dropdown_login').removeClass('show_drop');
                    $(this).removeClass('is_click');

                } else {
                    $(".drop_link_login").addClass("is_click");
                    $('.nav-dropdown_login').addClass('show_drop');
                };
            });

            $(".btn_menu").click(function() {
                if ($('.btn_menu').hasClass('is_active')) {
                    $('.responsive_content').removeClass('show');
                    $(this).removeClass('is_active');

                } else {
                    $(".btn_menu").addClass("is_active");
                    $('.responsive_content').addClass('show');
                }

            });
            $('.urgent_post_section').slick({
                slidesToShow: 2,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                responsive: [{
                    breakpoint: 980,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,

                    }
                },
                    {
                        breakpoint: 769,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ],
                prevArrow: "<img class='a-left control-c prev slick-prev'  src='{{asset('img/news_post/slider_arrow_left.png')}}' width='48' height='48'>",
                nextArrow: "<img class='a-right control-c next slick-next' src='{{asset('img/news_post/slider_arrow_right.png')}}'>"
            });
        });
    </script>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myBtn").style.display = "block";
            } else {
                document.getElementById("myBtn").style.display = "none";
            }
        }
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
    </script>
    
@stop
