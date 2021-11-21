@extends('layouts.master')
@section('content')
    <div class="vizew-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fa fa-home" aria-hidden="true"></i> خانه</a></li>
                            <li class="breadcrumb-item active" aria-current="page">درباره ما</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <!-- Section Heading -->
            <div class="section-heading">
                <h4>درباره ما</h4>
                <div class="line"></div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Typography Area Start ##### -->
    <div class="vizew-typography-area mb-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="sidebar-area">

                        <!-- ***** Single Widget ***** -->
                        <div class="single-widget followers-widget mb-50">
                            <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span class="counter">198</span><span>Fan</span></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span class="counter">220</span><span>Followers</span></a>
                            <a href="#" class="google"><i class="fa fa-google" aria-hidden="true"></i><span class="counter">140</span><span>Subscribe</span></a>
                        </div>


                    </div>
                </div>
                <div class="col-12 col-lg-8 text-right">
                    <!-- Typography Content -->
                    <div class="typography-content mb-50">
                        <!-- Title -->
                        <h4 class="mb-3">{{getSetting('Topic1')}}</h4>
                        <p>{!! getSetting('explain1')!!}</p>

                        <!-- Heading 1 -->
                        <h1>{{getSetting('Topic2')}}</h1>
                        <p>{!! getSetting('explain2')!!}</p>

                        <!-- Heading 2 -->
{{--                        <h2>{{getSetting('Topic3')}}</h2>--}}
{{--                        <p>{!! getSetting('explain3')!!}</p>--}}

                        <!-- Heading 3 -->
{{--                        <h3>{{getSetting('Topic4')}}</h3>--}}
{{--                        <p>{!! getSetting('explain4')!!}</p>--}}

                        <!-- Heading 4 -->
                        <h4>{{getSetting('Topic5')}}</h4>
                        <p>{!! getSetting('explain5')!!}</p>

                        <!-- Heading 5 -->
                        <h5>{{getSetting('Topic6')}}</h5>
                        <p>{!! getSetting('explain6')!!}</p>

                        <!-- Heading 6 -->
                        <h6>{{getSetting('Topic7')}}</h6>
                        <p>{!! getSetting('explain7')!!}</p>
                    </div>

                    <!-- Typography Content -->
{{--                    <div class="typography-content mb-50">--}}
{{--                        <!-- Title -->--}}
{{--                        <h4 class="mb-3">{{getSetting('Topic8')}}</h4>--}}

{{--                        <!-- Single Feature Post -->--}}
{{--                        <div class="single-feature-post video-post bg-img mb-30" style="background-image: url(img/bg-img/14.jpg);">--}}
{{--                            <!-- Play Button -->--}}
{{--                            <a href="video-post.html" class="btn play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>--}}

{{--                            <!-- Post Content -->--}}
{{--                            <div class="post-content">--}}
{{--                                <a href="#" class="post-cata">{{getSetting('Topic9')}}</a>--}}
{{--                                <a href="single-post.html" class="post-title">{{getSetting('explain9')}}</a>--}}
{{--                                <div class="post-meta d-flex">--}}
{{--                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>--}}
{{--                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 25</a>--}}
{{--                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 25</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!-- Video Duration -->--}}
{{--                            <span class="video-duration">{{getSetting('explain10')}}</span>--}}
{{--                        </div>--}}

{{--                        <p>{!! getSetting('explain11')!!}</p>--}}
{{--                    </div>--}}

                    <!-- Typography Content -->
{{--                    <div class="typography-content mb-50">--}}
{{--                        <!-- Title -->--}}
{{--                        <h4 class="mb-3">{{getSetting('Topic10')}}</h4>--}}

{{--                        <p>{!! getSetting('explain12')!!}</p>--}}

{{--                        <blockquote class="vizew-blockquote mb-15">--}}
{{--                            <h5 class="blockquote-text">{{getSetting('explain13')}}</h5>--}}
{{--                            <h6>{{getSetting('explain14')}}</h6>--}}
{{--                        </blockquote>--}}

{{--                        <p>{!! getSetting('explain15')!!}</p>--}}
{{--                    </div>--}}

{{--                    <!-- Typography Content -->--}}
{{--                    <div class="typography-content mb-50">--}}
{{--                        <!-- Title -->--}}
{{--                        <h4 class="mb-3">{{getSetting('Topic11')}}</h4>--}}

{{--                        <ul class="unordered-list mb-0">--}}
{{--                            <li>{{getSetting('explain16')}}</li>--}}
{{--                            <li>{{getSetting('explain17')}}</li>--}}
{{--                            <li>{{getSetting('explain18')}}</li>--}}
{{--                            <li>{{getSetting('explain19')}}</li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}

{{--                    <!-- Typography Content -->--}}
{{--                    <div class="typography-content mb-50">--}}
{{--                        <!-- Title -->--}}
{{--                        <h4 class="mb-3">{{getSetting('Topic12')}}</h4>--}}

{{--                        <ol class="ordered-list mb-0">--}}
{{--                            <li>{{getSetting('explain20')}}</li>--}}
{{--                            <li>{{getSetting('explain21')}}</li>--}}
{{--                            <li>{{getSetting('explain22')}}</li>--}}
{{--                            <li>{{getSetting('explain23')}}</li>--}}
{{--                        </ol>--}}
{{--                    </div>--}}

{{--                    <!-- Typography Content -->--}}
{{--                    <div class="typography-content mb-50">--}}
{{--                        <!-- Title -->--}}
{{--                        <h4 class="mb-3">{{getSetting('Topic13')}}</h4>--}}

{{--                        <!-- Contact Form Area -->--}}
{{--                        <div class="contact-form-area">--}}
{{--                            <form action="#" method="post">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-lg-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <input type="text" class="form-control" id="name" placeholder="نام">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <input type="email" class="form-control" id="email" placeholder="ایمیل">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-12">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="پیام"></textarea>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-12">--}}
{{--                                        <button class="btn vizew-btn mt-30" type="submit">ارسال</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>


            </div>
        </div>
    </div>
    <!-- ##### Typography Area End ##### -->

    <!-- ##### Footer Area Start ##### -->

    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    </body>


@endsection
