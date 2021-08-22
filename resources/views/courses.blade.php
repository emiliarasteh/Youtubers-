@extends('layouts.master')
@section('content')

<!-- ##### Breadcrumb Area Start ##### -->
<div class="vizew-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Archives</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Reunification of migrant toddlers</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Pager Area Start ##### -->
<div class="vizew-pager-area">
    <div class="vizew-pager-prev">
        <p>PREVIOUS ARTICLE</p>

        <!-- Single Feature Post -->
        <div class="single-feature-post video-post bg-img pager-article" style="background-image: url(img/bg-img/15.jpg);">
            <!-- Post Content -->
            <div class="post-content">
                <a href="#" class="post-cata cata-sm cata-success">Sports</a>
                <a href="video-post.html" class="post-title">Searching for the 'angel' who held me on Westminster Bridge</a>
                <div class="post-meta d-flex">
                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 18</a>
                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 32</a>
                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 24</a>
                </div>
            </div>
            <!-- Video Duration -->
            <span class="video-duration">11.13</span>
        </div>
    </div>

    <div class="vizew-pager-next">
        <p>NEXT ARTICLE</p>

        <!-- Single Feature Post -->
        <div class="single-feature-post video-post bg-img pager-article" style="background-image: url(img/bg-img/14.jpg);">
            <!-- Post Content -->
            <div class="post-content">
                <a href="#" class="post-cata cata-sm cata-business">Business</a>
                <a href="video-post.html" class="post-title">Reunification of migrant toddlers, parents should be completed Thursday</a>
                <div class="post-meta d-flex">
                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>
                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 25</a>
                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 25</a>
                </div>
            </div>
            <!-- Video Duration -->
            <span class="video-duration">06.59</span>
        </div>
    </div>
</div>
<!-- ##### Pager Area End ##### -->

<!-- ##### Post Details Area Start ##### -->
<section class="post-details-area mb-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="post-details-thumb mb-50">
                    <img src="{{asset($course->image)}}" style="width: 100%; height: 100%" alt="">
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <!-- Post Details Content Area -->
            <div class="col-12 col-lg-8 col-xl-7">
                <div class="post-details-content">
                    <!-- Blog Content -->
                    <div class="blog-content">

                        <!-- Post Content -->
                        <div class="post-content mt-0">
{{--                            <a  href="{{route('lessons.show')}}" class="post-cata cata-sm cata-danger">ورود</a>--}}
{{--                            <a  href="{{route('lessons.show')}}" class="post-title mb-2">Reunification of migrant toddlers, parents should be completed Thursday</a>--}}
                            @foreach($course->lessons as $lesson)
                            <div class="post-content">
                                <a href={{route('lessons.show', $lesson->id)}} class="post-title"> {{$lesson->title}}</a>
                            </div>
                            @endforeach

                            <div class="d-flex justify-content-between mb-30">
                                <div class="post-meta d-flex align-items-center">
                                    <a href="#" class="post-author">By Jane</a>
                                    <i class="fa fa-circle" aria-hidden="true"></i>
                                    <a href="#" class="post-date">Sep 08, 2018</a>
                                </div>
{{--                                <div class="post-meta d-flex">--}}
{{--                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 32</a>--}}
{{--                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 42</a>--}}
{{--                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 7</a>--}}
{{--                                </div>--}}
                            </div>
                        </div>

                        {!! $course->description !!}


                        <!-- Related Post Area -->
                        <div class="related-post-area mt-5">
                            <!-- Section Title -->
                            <div class="section-heading style-2">
                                <h4>دروس این دوره</h4>
                                <div class="line"></div>
                            </div>

                            <div class="row">
                                @foreach($course->lessons as $lesson)
                                <!-- Single Blog Post -->
                                <div class="col-12 col-md-6">
                                    <div class="single-post-area mb-50">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <a href={{route('lessons.show', $lesson->id)}} >
                                            <img src="{{asset('/assets/vizew-master/img/bg-img/11.jpg')}}" alt="">
                                            </a>

                                            <!-- Video Duration -->
                                            <span class="video-duration">{{$lesson->duration}} Min</span>
                                        </div>

                                        <!-- Post Content -->
                                        <div class="post-content">
{{--                                            <a href="#" class="post-cata cata-sm cata-success">Sports</a>--}}
                                            <a href="{{route('lessons.show', $lesson->id)}}" class="post-title">{{$lesson->title}}</a>
{{--                                            <div class="post-meta d-flex">--}}
{{--                                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 22</a>--}}
{{--                                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 16</a>--}}
{{--                                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 15</a>--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>

                        <!-- Comment Area Start -->
{{--                        <div class="comment_area clearfix mb-50">--}}

{{--                            <!-- Section Title -->--}}
{{--                            <div class="section-heading style-2">--}}
{{--                                <h4>Comment</h4>--}}
{{--                                <div class="line"></div>--}}
{{--                            </div>--}}

{{--                            <ul>--}}
{{--                                <!-- Single Comment Area -->--}}
{{--                                <li class="single_comment_area">--}}
{{--                                    <!-- Comment Content -->--}}
{{--                                    <div class="comment-content d-flex">--}}
{{--                                        <!-- Comment Author -->--}}
{{--                                        <div class="comment-author">--}}
{{--                                            <img src="/assets/vizew-master/img/bg-img/31.jpg" alt="author">--}}
{{--                                        </div>--}}
{{--                                        <!-- Comment Meta -->--}}
{{--                                        <div class="comment-meta">--}}
{{--                                            <a href="#" class="comment-date">27 Aug 2019</a>--}}
{{--                                            <h6>Tomas Mandy</h6>--}}
{{--                                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius</p>--}}
{{--                                            <div class="d-flex align-items-center">--}}
{{--                                                <a href="#" class="like">like</a>--}}
{{--                                                <a href="#" class="reply">Reply</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <ol class="children">--}}
{{--                                        <li class="single_comment_area">--}}
{{--                                            <!-- Comment Content -->--}}
{{--                                            <div class="comment-content d-flex">--}}
{{--                                                <!-- Comment Author -->--}}
{{--                                                <div class="comment-author">--}}
{{--                                                    <img src="/assets/vizew-master/img/bg-img/32.jpg" alt="author">--}}
{{--                                                </div>--}}
{{--                                                <!-- Comment Meta -->--}}
{{--                                                <div class="comment-meta">--}}
{{--                                                    <a href="#" class="comment-date">27 Aug 2019</a>--}}
{{--                                                    <h6>Britney Millner</h6>--}}
{{--                                                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius</p>--}}
{{--                                                    <div class="d-flex align-items-center">--}}
{{--                                                        <a href="#" class="like">like</a>--}}
{{--                                                        <a href="#" class="reply">Reply</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                    </ol>--}}
{{--                                </li>--}}

{{--                                <!-- Single Comment Area -->--}}
{{--                                <li class="single_comment_area">--}}
{{--                                    <!-- Comment Content -->--}}
{{--                                    <div class="comment-content d-flex">--}}
{{--                                        <!-- Comment Author -->--}}
{{--                                        <div class="comment-author">--}}
{{--                                            <img src="/assets/vizew-master/img/bg-img/33.jpg" alt="author">--}}
{{--                                        </div>--}}
{{--                                        <!-- Comment Meta -->--}}
{{--                                        <div class="comment-meta">--}}
{{--                                            <a href="#" class="comment-date">27 Aug 2019</a>--}}
{{--                                            <h6>Simon Downey</h6>--}}
{{--                                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius</p>--}}
{{--                                            <div class="d-flex align-items-center">--}}
{{--                                                <a href="#" class="like">like</a>--}}
{{--                                                <a href="#" class="reply">Reply</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}

                        <!-- Post A Comment Area -->
{{--                        <div class="post-a-comment-area">--}}

{{--                            <!-- Section Title -->--}}
{{--                            <div class="section-heading style-2">--}}
{{--                                <h4>Leave a reply</h4>--}}
{{--                                <div class="line"></div>--}}
{{--                            </div>--}}

{{--                            <!-- Reply Form -->--}}
{{--                            <div class="contact-form-area">--}}
{{--                                <form action="#" method="post">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-12 col-lg-6">--}}
{{--                                            <input type="text" class="form-control" id="name" placeholder="Your Name*">--}}
{{--                                        </div>--}}
{{--                                        <div class="col-12 col-lg-6">--}}
{{--                                            <input type="email" class="form-control" id="email" placeholder="Your Email*">--}}
{{--                                        </div>--}}
{{--                                        <div class="col-12">--}}
{{--                                            <textarea name="message" class="form-control" id="message" placeholder="Message*"></textarea>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-12">--}}
{{--                                            <button class="btn vizew-btn mt-30" type="submit">Submit Comment</button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                    </div>
                </div>
            </div>
            <!-- Sidebar Widget -->

        </div>
    </div>
</section>

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


