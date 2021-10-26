@extends('layouts.master')
@section('content')
    <section class="trending-posts-area">
        <div class="container">

            <div class="vizew-breadcrumb">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fa fa-home" aria-hidden="true"></i> خانه</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">تحلیل</li>
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
                        <h4>تحلیل</h4>
                        <div class="line"></div>
                    </div>
                </div>
            </div>


            <div class="row">
                <!-- Single Blog Post -->
                @foreach($pages as $page)

                    <div class="col-12 col-md-4">
                        <div class="single-post-area mb-80">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <a href="{{route('pages', $page->id)}}">
                                    <img src="{{ asset($page->image) }}" alt="">
                                </a>
                                <!-- Video Duration -->
                                <span class="video-duration">05.03</span>
                            </div>

                            <!-- Post Content -->

                            <div class="post-content">
                                <a href="{{route('pages.show', $page->id)}}" class="post-cata cata-sm cata-success">مشاهده</a>
                                <a href="{{route('pages.show', $page->id)}}" class="post-title">
                                    {{ \Illuminate\Support\Str::of($page->description)->limit(47, ' (...)')}}
                                </a>
                                {{--                            <div class="post-meta d-flex">--}}
                                {{--                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 22</a>--}}
                                {{--                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 16</a>--}}
                                {{--                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 15</a>--}}
                                {{--                            </div>--}}
                            </div>
                        </div>
                    </div>
            @endforeach
            <!-- Single Blog Post -->


                <!-- Single Blog Post -->

            </div>

        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

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
