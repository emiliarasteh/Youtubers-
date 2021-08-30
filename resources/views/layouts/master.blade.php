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
    <link rel="icon" href="/assets/vizew-master/img/core-img/img.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="/assets/vizew-master/style.css">
    @yield('header')

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
                <div class="col-12 col-md-6">
                    <!-- Breaking News Widget -->
                    <div class="breaking-news-area d-flex align-items-center">
                        <div class="news-title">
                            <p>درس های جدید</p>
                        </div>
                        <div id="breakingNewsTicker" class="ticker">
                            <ul>
                                <li><a href="single-post.html">فارکس</a></li>
                                <li><a href="single-post.html">تریدینگ</a></li>
                                <li><a href="single-post.html">آموزش بورس</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
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
                            <form action="index.html" method="post">
                                <input type="search" name="top-search" id="topSearch" placeholder="جستجو...">
                                <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                        <!-- Login -->

                        @if (auth()->guest())
                            <a href="{{route('login')}}" class="login-btn"><i class="fa fa-user" aria-hidden="true"></i></a>
                        @else
                            <a class="login-btn" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" ><i class="fa fa-sign-out" aria-hidden="true"></i></a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
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
                    <a href="index.html" class="nav-brand"><img src="/assets/vizew-master/img/core-img/img.png" width="70" height="70" alt=""></a>

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


                                <li><a href="{{route('contact')}}">تماس با ما</a></li>

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
                                     <div class="megamenu">
                                         <ul class="single-mega cn-col-4">
                                             <li><a href="index.html">- Home</a></li>
                                             <li><a href="archive-list.html">- Archive List</a></li>
                                             <li><a href="archive-grid.html">- Archive Grid</a></li>
                                             <li><a href="single-post.html">- Single Post</a></li>
                                             <li><a href="video-post.html">- Single Video Post</a></li>
                                             <li><a href="contact.html">- Contact</a></li>
                                             <li><a href="typography.html">- Typography</a></li>
                                             <li><a href="login.html">- Login</a></li>
                                         </ul>
                                         <ul class="single-mega cn-col-4">
                                             <li><a href="index.html">- Home</a></li>
                                             <li><a href="archive-list.html">- Archive List</a></li>
                                             <li><a href="archive-grid.html">- Archive Grid</a></li>
                                             <li><a href="single-post.html">- Single Post</a></li>
                                             <li><a href="video-post.html">- Single Video Post</a></li>
                                             <li><a href="contact.html">- Contact</a></li>
                                             <li><a href="typography.html">- Typography</a></li>
                                             <li><a href="login.html">- Login</a></li>
                                         </ul>
                                         <ul class="single-mega cn-col-4">
                                             <li><a href="index.html">- Home</a></li>
                                             <li><a href="archive-list.html">- Archive List</a></li>
                                             <li><a href="archive-grid.html">- Archive Grid</a></li>
                                             <li><a href="single-post.html">- Single Post</a></li>
                                             <li><a href="video-post.html">- Single Video Post</a></li>
                                             <li><a href="contact.html">- Contact</a></li>
                                             <li><a href="typography.html">- Typography</a></li>
                                             <li><a href="login.html">- Login</a></li>
                                         </ul>
                                         <ul class="single-mega cn-col-4">
                                             <li><a href="index.html">- Home</a></li>
                                             <li><a href="archive-list.html">- Archive List</a></li>
                                             <li><a href="archive-grid.html">- Archive Grid</a></li>
                                             <li><a href="single-post.html">- Single Post</a></li>
                                             <li><a href="video-post.html">- Single Video Post</a></li>
                                             <li><a href="contact.html">- Contact</a></li>
                                             <li><a href="typography.html">- Typography</a></li>
                                             <li><a href="login.html">- Login</a></li>
                                         </ul>
                                     </div>
                                 </li>
                                <li class="active"><a href="{{route('pages')}}">مطالب</a></li>
                                <li class="active"><a href="{{route('about')}}">درباره ما</a></li>
                                <li class="active"><a href="{{route('home')}}">خانه</a></li>

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
<!-- ##### Vizew Psot Area End ##### -->

<!-- ##### Footer Area Start ##### -->
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="footer-widget mb-70">
                    <!-- Logo -->
                    <a href="index.html" class="foo-logo d-block mb-4"><img src="/assets/vizew-master/img/core-img/logo2.png" alt=""></a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                    <!-- Footer Newsletter Area -->
                    <div class="footer-nl-area">
                        <form action="#" method="post">
                            <input type="email" name="nl-email" class="form-control" id="nlEmail" placeholder="Your email">
                            <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="footer-widget mb-70">
                    <h6 class="widget-title">Latest Twister</h6>
                    <!-- Twitter Slides -->
                    <div class="twitter-slides owl-carousel">

                        <!-- Single Twitter Slide -->
                        <div class="single--twitter-slide">
                            <!-- Single Twit -->
                            <div class="single-twit">
                                <p><i class="fa fa-twitter"></i> <span>@Leonard</span> I am so happy because I found this magazine, and it just made Vizeweasier. Thanks for sharing</p>
                            </div>
                            <!-- Single Twit -->
                            <div class="single-twit">
                                <p><i class="fa fa-twitter"></i> <span>@Leonard</span> I am so happy because I found this magazine, and it just made Vizeweasier. Thanks for sharing</p>
                            </div>
                        </div>

                        <!-- Single Twitter Slide -->
                        <div class="single--twitter-slide">
                            <!-- Single Twit -->
                            <div class="single-twit">
                                <p><i class="fa fa-twitter"></i> <span>@Colorlib</span> I am so happy because I found this magazine, and it just made Vizeweasier. Thanks for sharing</p>
                            </div>
                            <!-- Single Twit -->
                            <div class="single-twit">
                                <p><i class="fa fa-twitter"></i> <span>@Colorlib</span> I am so happy because I found this magazine, and it just made Vizeweasier. Thanks for sharing</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="footer-widget mb-70">
                    <h6 class="widget-title">Sport Videos</h6>

                    <!-- Single Blog Post -->
                    <div class="single-blog-post d-flex">
                        <div class="post-thumbnail">
                            <img src="/assets/vizew-master/img/bg-img/1.jpg" alt="">
                        </div>
                        <div class="post-content">
                            <a href="single-post.html" class="post-title">DC Shoes: gymkhana the</a>
                            <div class="post-meta d-flex justify-content-between">
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Blog Post -->
                    <div class="single-blog-post d-flex">
                        <div class="post-thumbnail">
                            <img src="/assets/vizew-master/img/bg-img/2.jpg" alt="">
                        </div>
                        <div class="post-content">
                            <a href="single-post.html" class="post-title">Sweet Yummy Chocolatea Tea</a>
                            <div class="post-meta d-flex justify-content-between">
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="footer-widget mb-70">
                    <h6 class="widget-title">Our Address</h6>
                    <!-- Contact Address -->
                    <div class="contact-address">
                        <p>101 E 129th St, East Chicago, <br>IN 46312, US</p>
                        <p>Phone: 001-1234-88888</p>
                        <p>Email: info.colorlib@gmail.com</p>
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
    <div class="copywrite-area">
        <div class="container">
            <div class="row align-items-center">
                <!-- Copywrite Text -->
                <div class="col-12 col-sm-6">
                    <p class="copywrite-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
                <div class="col-12 col-sm-6">
                    <nav class="footer-nav">
                        <ul>
                            <li><a href="#">Advertise</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Disclaimer</a></li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
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

</body>

</html>
