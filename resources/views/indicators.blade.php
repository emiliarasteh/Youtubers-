@extends('layouts.master')
@section('header')
    {{--    <link href="https://vjs.zencdn.net/7.14.3/video-js.css" rel="stylesheet" />--}}
    <link href="{{mix('css/app.css')}}" rel="stylesheet"/>
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
                            <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fa fa-home" aria-hidden="true"></i> خانه</a></li>
                            <li class="breadcrumb-item active" aria-current="page">اندیکاتورها</li>
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
                <h4>اندیکاتورها</h4>
                <div class="line"></div>
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
    <section>
        @foreach($indicators as $indicator)
            <div class="col-sm-6 mb-30 offset-md-3">
                <div class="card" style="border-color: #303334">
                    <div class="card-body" style="background-color: #303334">
                        <h5 class="card-title text-center">{{$indicator->title}}</h5>
                        <p class="card-text text-center">{{$indicator->description}} </p>
                        <a href="{{route('admin.indicators.file_download', $indicator->file)}}" class="btn btn-sm btn-primary">دانلود</a>
                    </div>
                </div>
            </div>
        @endforeach
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


