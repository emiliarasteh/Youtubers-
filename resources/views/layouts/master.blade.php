<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>آموزش فارکس</title>

    <!-- Favicon -->
    <link rel="icon" href="/assets/logo.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="/assets/vizew-master/style.css">
    @yield('header')
    <style>
        .vizew-nav-tab .nav-link.active{
            background-color: #8d8d8d!important;
        }
        .vizew-nav-tab{
            background-color: whitesmoke!important;
        }
        #scrollUp{
            background-color: #C14E89;
            right: unset!important;
            left: 50px!important;
        }
        body{
            background-color: whitesmoke!important;
        }
        h1, h2, h3, h4, h5, h6, p, small, a, label{
            color: black!important;
        }
        .form-control{
            background-color: white;
        }
    </style>
    <!BEGIN RAYCHAT CODE--> <script type="text/javascript">!function(){function t(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,localStorage.getItem("rayToken")?t.src="https://app.raychat.io/scripts/js/"+o+"?rid="+localStorage.getItem("rayToken")+"&href="+window.location.href:t.src="https://app.raychat.io/scripts/js/"+o+"?href="+window.location.href;var e=document.getElementsByTagName("script")[0];e.parentNode.insertBefore(t,e)}var e=document,a=window,o="c7d15b50-6ee3-4624-a021-468fb4a322ce";"complete"==e.readyState?t():a.attachEvent?a.attachEvent("onload",t):a.addEventListener("load",t,!1)}();</script> <!END RAYCHAT CODE-->
    <script type="text/javascript">!function(){function t(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,localStorage.getItem("rayToken")?t.src="https://app.raychat.io/scripts/js/"+o+"?rid="+localStorage.getItem("rayToken")+"&href="+window.location.href:t.src="https://app.raychat.io/scripts/js/"+o+"?href="+window.location.href;var e=document.getElementsByTagName("script")[0];e.parentNode.insertBefore(t,e)}var e=document,a=window,o="90d048cc-281d-4728-ab8b-44d3fbbfc4f9";"complete"==e.readyState?t():a.attachEvent?a.attachEvent("onload",t):a.addEventListener("load",t,!1)}();</script>
</head>

<body>
<!-- Preloader -->
<div class="preloader d-flex align-items-center justify-content-center">
    <div class="lds-ellipsis">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>

<!-- ##### Header Area Start ##### -->
<header class="header-area">
    <!-- Top Header Area -->
    <div class="top-header-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-3">
                    <!-- Breaking News Widget -->
                    <div class="breaking-news-area d-flex align-items-center">
                        <div class="news-title">
                            <p>درس های جدید</p>
                        </div>
                        <div id="breakingNewsTicker" class="ticker">
                            <ul>
                                @foreach($courses as $course)
                                    <li><a href="{{route('courses.show', $course->id)}}">{{$course->title}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-9">
                    <div class="top-meta-data d-flex align-items-center justify-content-end">
                        <!-- Top Social Info -->
                        <div class="top-social-info">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                        <!-- Top Search Area -->
                        <div class="top-search-area">
{{--                            <form action="index.html" method="post">--}}
{{--                                <input type="search" name="top-search" id="topSearch" placeholder="جستجو...">--}}
{{--                                <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i>--}}
{{--                                </button>--}}
{{--                            </form>--}}
                        </div>
                        <!-- Login -->

                        @if (auth()->guest())
                            <a href="{{route('login')}}" class="login-btn"><i class="fa fa-user" aria-hidden="true"></i>
                            </a>
                        @else
                            <div class="text-center align-items-center ml-1">
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                                        class="fa fa-sign-out" aria-hidden="true"></i>

                                </a>
                                <br>

                                {{\Illuminate\Support\Facades\Auth::user()->name}}
                                سلام
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>

                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar Area -->
    <div class="vizew-main-menu" id="sticker">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">

                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="vizewNav">

                    <!-- Nav brand -->
                    <a href="/" class="nav-brand"><img src="/assets/logo.png"
                                                                width="70" height="70" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
{{--                                <li class="{{ (request()->is('contact')) ? 'active' : 'contact' }}">--}}
{{--                                    <a href="{{route('contact')}}">تماس با ما</a></li>--}}

                                <li class="{{ (request()->is('indicators')) ? 'active' : 'indicators' }}">
                                    <a href="{{route('indicator.index')}}">اندیکاتورها</a></li>


                            {{--                                        @foreach($indicators as $indicator)--}}
                            {{--                                            <ul class="single-mega cn-col-4">--}}
                            {{--                                                <li>--}}
                            {{--                                                    <a href="{{route('indicators.show', $indicator->id)}}"> {{$indicator->title}} </a>--}}
                            {{--                                                </li>--}}
                            {{--                                            </ul>--}}
                            {{--                                        @endforeach--}}



                            <!-- <li><a href="archive-list.html">Archives</a></li>
                                 <li><a href="#">Pages</a>
                                     <ul class="dropdown">
                                         <li><a href="index.html">- Home</a></li>
                                         <li><a href="archive-list.html">- Archive List</a></li>
                                         <li><a href="archive-grid.html">- Archive Grid</a></li>
                                         <li><a href="single-post.html">- Single Post</a></li>
                                         <li><a href="video-post.html">- Single Video Post</a></li>
                                         <li><a href="contact.html">- Contact</a></li>
                                         <li><a href="typography.html">- Typography</a></li>
                                         <li><a href="login.html">- Login</a></li>
                                     </ul>
                                 </li>-->
                                <li><a href="#">دوره ها</a>
                                    <div class="dropdown">
                                        @foreach($courses as $course)
                                            <ul class="col-sm-12 text-center">
                                                <li>
                                                    <a href="{{route('courses.show', $course->id)}}"> {{$course->title}}</a>
                                                </li>
                                            </ul>
                                        @endforeach
                                    </div>
                                </li>


                                <li class="{{ (request()->is('pages')) ? 'active' : 'pages' }}">
                                    <a href="{{route('pages')}}">تحلیل</a></li>

                                <li class="{{ (request()->is('about')) ? 'active' : 'about' }}">
                                    <a href="{{route('about')}}">درباره ما</a></li>

                                <li class="{{ (request()->is('home')) ? 'active' : 'home' }}">
                                    <a href="{{route('home')}}">خانه</a></li>

                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->
<!-- ##### Hero Area Start ##### -->
@yield('content')
<div class="modal fade sell-modal-modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">توجه!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-right">
                کاربرگرامی!
                لطفا برای خرید دوره ایمیلی را که با آن در سایت ثبت نام کرده اید به همراه نام دوره
                و شماره تماس خود، را به قسمت پشتیبانی ارسال کنید.
                کارشناسان ما در اسرع وقت با شما تماس خواهند گرفت
                <br>
                با تشکر
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
            </div>
        </div>
    </div>
</div>
<!-- ##### Vizew Psot Area End ##### -->

<!-- ##### Footer Area Start ##### -->
<footer class="footer-area">
    <div class="container">
        <div class="row text-center">
            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-6 col-xl-6">
                <div class="footer-widget ">
                    <!-- Logo -->
                    <a class="widget-title" href="{{route('about')}}" class="foo-logo d-block mb-4 "><img
                            rel="icon" src="/assets/logo.png" alt="" width="100" height="100">
                        </a>

                    @php
                    $about = \App\Models\Setting::where('key', 'explain1')->first();
                    @endphp
                    <p class="text-right" style="color: white!important;">

                        @if($about !== null)
                            {{$about->value}}
                        @endif
                    </p>

                </div>
            </div>

            <!-- Footer Widget Area -->
{{--            <div class="col-12 col-sm-6 col-xl-3">--}}
{{--                <div class="footer-widget mb-70">--}}
{{--                    <h6 class="widget-title">دروس پرفروش</h6>--}}
{{--                    <!-- Twitter Slides -->--}}
{{--                    <div class="twitter-slides owl-carousel">--}}

{{--                        <!-- Single Twitter Slide -->--}}
{{--                        @php--}}
{{--                        $counter = 0--}}
{{--                        @endphp--}}
{{--                        @foreach($courses as $course)--}}

{{--                            <div class="col-12 col-md-4">--}}
{{--                                <div class="single-post-area mb-10">--}}
{{--                                    <!-- Post Thumbnail -->--}}
{{--                                    <div class="post-thumbnail">--}}
{{--                                        <a href="{{route('courses.show', $course->id)}}">--}}
{{--                                            <img src="{{ asset($course->image) }}" alt="">--}}
{{--                                        </a>--}}
{{--                                        <div class="post-content">--}}
{{--                                            <a href="{{route('courses.show', $course->id)}}" class="post-title">--}}
{{--                                                {{ \Illuminate\Support\Str::of($course->title)->limit(47, ' (...)')}}--}}
{{--                                            </a>--}}
{{--                                            <a href="{{route('courses.show', $course->id)}}"--}}
{{--                                               class="post-cata cata-md cata-primary">مشاهده</a>--}}
{{--                                            <button type="button" class="btn btn-sm btn-success sell-modal" data-toggle="modal"--}}
{{--                                            data-target=".sell-modal-modal">خرید دوره</button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        @endforeach--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

            <!-- Footer Widget Area -->
{{--            <div class="col-12 col-sm-6 col-xl-3">--}}
{{--                <div class="footer-widget mb-70">--}}
{{--                    <h6 class="widget-title">جدیدترین دروس</h6>--}}

{{--                    <!-- Single Blog Post -->--}}
{{--                    <div class="single-blog-post d-flex">--}}
{{--                        <div class="post-thumbnail">--}}
{{--                            <img src="/assets/vizew-master/img/bg-img/1.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="post-content">--}}
{{--                            <a href="single-post.html" class="post-title">فارکس : تحلیل درس اول</a>--}}
{{--                            <div class="post-meta d-flex justify-content-between">--}}
{{--                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> ۱۴</a>--}}
{{--                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> ۳۴</a>--}}
{{--                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> ۸۴</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <!-- Single Blog Post -->--}}
{{--                    <div class="single-blog-post d-flex">--}}
{{--                        <div class="post-thumbnail">--}}
{{--                            <img src="/assets/vizew-master/img/bg-img/2.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="post-content">--}}
{{--                            <a href="single-post.html" class="post-title">فارکس : تحلیل درس دوم</a>--}}
{{--                            <div class="post-meta d-flex justify-content-between">--}}
{{--                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>۱۴</a>--}}
{{--                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> ۳۴</a>--}}
{{--                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> ۸۴</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}

            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-6 col-xl-6">
                <div class="footer-widget mb-70">

{{--                    <a class="widget-title" href="{{route('contact')}}" class="foo-logo d-block mb-4" style="color: white!important;">تماس با ما</a>--}}

                    <!-- Contact Address -->
                    <div class="contact-address">
                        <p {{getSetting('address')}} style="color: white!important;">آدرس</p>
                        <p {{getSetting('phone_number')}} style="color: white!important;">شماره تلفن</p>
                        <p {{getSetting('email')}} style="color: white!important;">ایمیل</p>
                    </div>
                    <!-- Footer Social Area -->
                    <div class="footer-social-area">
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Copywrite Area -->




</footer>
<!-- ##### Footer Area End ##### -->

<!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<script src="/assets/vizew-master/js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="/assets/vizew-master/js/bootstrap/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="/assets/vizew-master/js/bootstrap/bootstrap.min.js"></script>
<!-- All Plugins js -->
<script src="/assets/vizew-master/js/plugins/plugins.js"></script>
<!-- Active js -->
<script src="/assets/vizew-master/js/active.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


@if(session()->has('error'))
    <script>
        Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: '{{session()->get('error')}}',
            showConfirmButton: false,
            timer: 1500
        })
    </script>
@endif
@if(session()->has('success'))
    <script>
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: '{{session()->get('success')}}',
            showConfirmButton: false,
            timer: 1500
        })
    </script>
@endif

@yield('footer')

{{--<script>--}}
{{--    $('.sell-modal').modal('toggle')--}}
{{--</script>--}}

</body>

</html>
