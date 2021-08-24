@extends('layouts.master')
@section('header')
{{--    <link href="https://vjs.zencdn.net/7.14.3/video-js.css" rel="stylesheet" />--}}
<link href="{{mix('css/app.css')}}" rel="stylesheet" />
<!-- Video.js base CSS -->
<link href="https://unpkg.com/video.js@7/dist/video-js.min.css" rel="stylesheet">

<!-- Forest -->
<link href="https://unpkg.com/@videojs/themes@1/dist/forest/index.css" rel="stylesheet">


@endsection
@section('content')

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="vizew-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i>
                                    Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Archives</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Reunification of migrant toddlers
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Pager Area Start ##### -->
{{--    <div class="vizew-pager-area">--}}
{{--        <div class="vizew-pager-prev">--}}
{{--            <p>PREVIOUS ARTICLE</p>--}}

{{--            <!-- Single Feature Post -->--}}
{{--            <div class="single-feature-post video-post bg-img pager-article"--}}
{{--                 style="background-image: url(img/bg-img/15.jpg);">--}}
{{--                <!-- Post Content -->--}}
{{--                <div class="post-content">--}}
{{--                    <a href="#" class="post-cata cata-sm cata-success">Sports</a>--}}
{{--                    <a href="video-post.html" class="post-title">Searching for the 'angel' who held me on Westminster--}}
{{--                        Bridge</a>--}}
{{--                    <div class="post-meta d-flex">--}}
{{--                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 18</a>--}}
{{--                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 32</a>--}}
{{--                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 24</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- Video Duration -->--}}
{{--                <span class="video-duration">11.13</span>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="vizew-pager-next">--}}
{{--            <p>NEXT ARTICLE</p>--}}

{{--            <!-- Single Feature Post -->--}}
{{--            <div class="single-feature-post video-post bg-img pager-article"--}}
{{--                 style="background-image: url(img/bg-img/14.jpg);">--}}
{{--                <!-- Post Content -->--}}
{{--                <div class="post-content">--}}
{{--                    <a href="#" class="post-cata cata-sm cata-business">Business</a>--}}
{{--                    <a href="video-post.html" class="post-title">Reunification of migrant toddlers, parents should be--}}
{{--                        completed Thursday</a>--}}
{{--                    <div class="post-meta d-flex">--}}
{{--                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>--}}
{{--                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 25</a>--}}
{{--                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 25</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- Video Duration -->--}}
{{--                <span class="video-duration">06.59</span>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- ##### Pager Area End ##### -->

    <!-- ##### Post Details Area Start ##### -->
    <section class="post-details-area mb-80">
        <div class="container" id="videoapp">
            <div class="row">
                <div class="col-12">
                    <div class="post-details-thumb mb-50">
{{--                            <video style="width: 100%" height="500" class="video-js vjs-big-play-centered" controls data-setup='{--}}
{{--                            "fluid": true--}}
{{--                            }'>--}}
{{--                                <source src="{{asset($lesson->video)}}" type="video/mp4">--}}
{{--                                <source src="movie.ogg" type="video/ogg">--}}
{{--                                Your browser does not support the video tag.--}}
{{--                            </video>--}}
                        <video-player src="{{route('lessons.video',['playlist' => $lesson->video])}}"></video-player>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Blog Post -->

                <div class="col-12 col-md-4">
                    <div class="single-post-area mb-80" style="text-align: center">{{$lesson->title}}</div>
                </div>
                <div class="col-12 col-md-12">
                    <div class="post-details-content">
                        <!-- Blog Content -->
                        <div class="blog-content" style="text-align: center">
                            {!! $lesson->description !!}
                        </div>
                    </div>

                </div>




                        <!-- Post Content -->

        </div>
    </section>



@endsection

@section('footer')
{{--    <script src="https://vjs.zencdn.net/7.14.3/video.min.js"></script>--}}
<script src="{{mix('js/app.js')}}"></script>


@endsection

<!-- Sidebar Widget -->

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

<!-- ##### Hero Area End ##### -->

<!-- ##### Trending Posts Area Start ##### -->


