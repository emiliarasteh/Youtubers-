@extends('layouts.master')
@section('content')

    <section class="hero--area section-padding-80">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-12 col-md-7 col-lg-8">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="post-1" role="tabpanel" aria-labelledby="post-1-tab">
                            <!-- Single Feature Post -->
                            <div class="single-feature-post video-post bg-img"
                                 style="background-image: url({{$more_viewed_video['snippet']['thumbnails']['high']['url']}});">
                                <!-- Play Button -->
                                <a href="https://www.youtube.com/watch?v={{$more_viewed_video['id']['videoId']}}"
                                   target="_blank" class="btn play-btn"><i class="fa fa-play"
                                                                           aria-hidden="true"></i></a>

                                <!-- Post Content -->
                                <div class="post-content">
                                    {{--                                    <a href="#" class="post-cata">Sports</a>--}}
                                    <a href="https://www.youtube.com/watch?v={{$more_viewed_video['id']['videoId']}}"
                                       target="_blank" class="post-title">{{$more_viewed_video['snippet']['title']}}</a>
                                    {{--                                    <div class="post-meta d-flex">--}}
                                    {{--                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>--}}
                                    {{--                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 25</a>--}}
                                    {{--                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 25</a>--}}
                                    {{--                                    </div>--}}
                                </div>

                                <!-- Video Duration -->
                                <span class="video-duration">05.03</span>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-md-5 col-lg-4">
                    <ul class="nav vizew-nav-tab" role="tablist">

                        @foreach($last_videos['items'] as $video)
                            <li class="nav-item">
                                <a class="nav-link active" id="post-1-tab"
                                   href="https://www.youtube.com/watch?v={{$video['contentDetails']['upload']['videoId']}}"
                                   role="tab" target="_blank"
                                >
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post style-2 d-flex align-items-center">
                                        <div class="post-thumbnail">
                                            <img src="{{$video['snippet']['thumbnails']['default']['url']}}" alt="">
                                        </div>
                                        <div class="post-content">
                                            <h6 class="post-title">{{$video['snippet']['title']}}</h6>
                                            <div class="post-meta d-flex justify-content-between">
                                                {{--                                            <span><i class="fa fa-comments-o" aria-hidden="true"></i> 25</span>--}}
                                                {{--                                            <span><i class="fa fa-eye" aria-hidden="true"></i> 11</span>--}}
                                                {{--                                            <span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 19</span>--}}
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        @endforeach


                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Trending Posts Area Start ##### -->
    <section class="trending-posts-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h4>دروس پرفروش</h4>
                        <div class="line"></div>
                    </div>
                </div>
            </div>


            <div class="row">
                <!-- Single Blog Post -->
                @foreach($courses as $course)

                    <div class="col-12 col-md-4">
                        <div class="single-post-area mb-80">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <a href="{{route('courses.show', $course->id)}}">
                                    <img src="{{ asset($course->image) }}" alt="">
                                </a>
                                <!-- Video Duration -->
                                <span class="video-duration">05.03</span>
                            </div>

                            <!-- Post Content -->

                            <div class="post-content">
                                <a href="{{route('courses.show', $course->id)}}" class="post-cata cata-md cata-primary">مشاهده</a>
                                <button type="button" class="btn btn-xs btn-success" data-toggle="modal"
                                        data-target=".sell-modal-modal">خرید دوره
                                </button>
                                <a href="{{route('courses.show', $course->id)}}" class="post-title">
                                    {{ \Illuminate\Support\Str::of(strip_tags($course->description))->limit(47, ' (...)')}}
                                </a>
                                {{--                            <div class="post-meta d-flex">--}}
                                {{--                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 22</a>--}}
                                {{--                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 16</a>--}}
                                {{--                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 15</a>--}}
                                {{--                            </div>--}}
                            </div>
                        </div>
                    </div>
                    <!-- modals -->
                    <!-- Large modal -->
                    <div class="modal fade bs-example-modal-lg" id="myModalLabel" tabindex="-1" role="dialog"
                         aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">خرید دوره</h4>
                                    <button type="button" class="close" data-dismiss="modal"><span
                                            aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body" id="myModalLabel">
                                    <h4>Text in a modal</h4>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus
                                        sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                        scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                        metus auctor fringilla.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach
            <!-- Single Blog Post -->


                <!-- Single Blog Post -->

            </div>

        </div>
    </section>
    <!-- ##### Trending Posts Area End ##### -->

    <!-- ##### Vizew Post Area Start ##### -->
    <section class="vizew-post-area mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7 col-lg-8">
                    <div class="all-posts-area">
                        <!-- Section Heading -->
                        <div class="section-heading style-2">
                            <h4>ویژه ها</h4>
                            <div class="line"></div>
                        </div>

                        <!-- Featured Post Slides -->
                        <div class="featured-post-slides owl-carousel mb-30">
                            <!-- Single Feature Post -->
                            @foreach($relevance_videos['items'] as $video)
                                @if(array_key_exists('videoId',$video['id']))
                                    <div class="single-feature-post video-post bg-img"
                                         style="background-image: url({{$video['snippet']['thumbnails']['high']['url']}});">
                                        <!-- Play Button -->
                                        {{--                                {{dd($video['id']['videoId'])}}--}}
                                        <a href="https://www.youtube.com/watch?v={{$video['id']['videoId']}}"
                                           class="btn play-btn" target="_blank"><i class="fa fa-play"
                                                                                   aria-hidden="true"></i></a>

                                        <!-- Post Content -->
                                        <div class="post-content">
                                            {{--                                    <a href="#" class="post-cata">Sports</a>--}}
                                            <a href="https://www.youtube.com/watch?v={{$video['id']['videoId']}}"
                                               class="post-title" target="_blank">{{$video['snippet']['title']}}</a>
                                            {{--                                    <div class="post-meta d-flex">--}}
                                            {{--                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>--}}
                                            {{--                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 25</a>--}}
                                            {{--                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 25</a>--}}
                                            {{--                                    </div>--}}
                                        </div>

                                        <!-- Video Duration -->
                                        {{--                                <span class="video-duration">05.03</span>--}}
                                    </div>
                                @endif
                            @endforeach
                        </div>


                        <div class="row">
                            @foreach($playlists['items'] as $playlist)
                                <div class="col-12 col-lg-6">
                                    <!-- Section Heading -->
                                    <div class="section-heading style-2">
                                        <h4>{{$playlist['snippet']['title']}}</h4>
                                        <div class="line"></div>
                                    </div>

                                @foreach($playlists_videos as $playlist_videos)
                                    @if($playlist_videos['playlist_id'] === $playlist['id'])
                                        <!-- Sports Video Slides -->
                                            <div class="sport-video-slides owl-carousel mb-50">
                                            @foreach($playlist_videos['items'] as $video)
                                                @if(array_key_exists('medium',$video['snippet']['thumbnails']))
                                                    <!-- Single Blog Post -->
                                                        <div class="single-post-area">
                                                            <!-- Post Thumbnail -->
                                                            <div class="post-thumbnail">
                                                                <a target="_blank"
                                                                   href="https://www.youtube.com/watch?v={{$video['snippet']['resourceId']['videoId']}}&list={{$video['snippet']['playlistId']}}">
                                                                    <img
                                                                        src="{{$video['snippet']['thumbnails']['medium']['url']}}"
                                                                        alt="">
                                                                </a>


                                                                <!-- Video Duration -->
                                                                {{--                                                            <span class="video-duration">05.03</span>--}}
                                                            </div>

                                                            <!-- Post Content -->
                                                            <div class="post-content">
                                                                {{--                                                            <a href="#"--}}
                                                                {{--                                                               class="post-cata cata-sm cata-success">Sports</a>--}}
                                                                <a href="https://www.youtube.com/watch?v={{$video['snippet']['resourceId']['videoId']}}&list={{$video['snippet']['playlistId']}}"
                                                                   class="post-title"
                                                                   target="_blank">{{$video['snippet']['title']}}</a>
                                                                {{--                                                            <div class="post-meta d-flex">--}}
                                                                {{--                                                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>--}}
                                                                {{--                                                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 38</a>--}}
                                                                {{--                                                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 22</a>--}}
                                                                {{--                                                            </div>--}}
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>

                                        @endif
                                    @endforeach

                                </div>
                            @endforeach
                        </div>


                        <!-- Section Heading -->
                        <div class="section-heading style-2">
                            <h4>جدید ترین دروس</h4>
                            <div class="line"></div>
                        </div>

                        <!-- Featured Post Slides -->
                        @foreach($courses as $course)
                            <div class="featured-post-slides owl-carousel mb-30">
                                <!-- Single Feature Post -->
                                <div class="single-feature-post video-post bg-img"
                                     style="background-image: url({{$course->image}});">
                                    <!-- Play Button -->
                                    <a href="{{route('courses.show', $course->id)}}" class="btn play-btn"><i
                                            class="fa fa-play"
                                            aria-hidden="true"></i></a>

                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="{{route('courses.show', $course->id)}}" class="post-title">
                                            {{$course->title}}
                                        </a>

                                    </div>

                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-12 col-md-5 col-lg-4">
                    <div class="sidebar-area">

                        <!-- ***** Single Widget ***** -->
                        <div class="single-widget followers-widget mb-50">
                            <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span
                                    class="counter">198</span><span>Fan</span></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span
                                    class="counter">220</span><span>Followers</span></a>
                            <a href="#" class="google"><i class="fa fa-google" aria-hidden="true"></i><span
                                    class="counter">140</span><span>Subscribe</span></a>
                        </div>

                        <!-- ***** Single Widget ***** -->
                        <div class="single-widget latest-video-widget mb-50">
                            <!-- Section Heading -->
                            <div class="section-heading style-2 mb-30">
                                <h4>ویدیوهای جدید</h4>
                                <div class="line"></div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="single-post-area mb-30">
                                <!-- Post Thumbnail -->
                                <div class="post-thumbnail">
{{--                                    {{dd($last_videos_down['items'][0]['snippet']['thumbnails']['medium']['url'])}}--}}
                                    <img
                                        src="{{$last_videos_down['items'][0]['snippet']['thumbnails']['medium']['url']}}"
                                        alt="">

                                    <!-- Video Duration -->
                                    {{--                                    <span class="video-duration">05.03</span>--}}
                                </div>

                                <!-- Post Content -->
                                <div class="post-content">
                                    {{--                                    <a href="#" class="post-cata cata-sm cata-success">Sports</a>--}}
                                    @foreach($last_videos_down['items'] as $item)
                                        @if(array_key_exists('videoId', $item['id']))
                                            <a href="https://www.youtube.com/watch?v={{$item['id']['videoId']}}"
                                               class="post-title">{{$last_videos_down['items'][0]['snippet']['title']}}</a>
{{--                                        {{dd('df')}}--}}
{{--                                            @break--}}
                                        @endif
                                    @endforeach

                                    {{--                                    <div class="post-meta d-flex">--}}
                                    {{--                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>--}}
                                    {{--                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 38</a>--}}
                                    {{--                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 22</a>--}}
                                    {{--                                    </div>--}}
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            @foreach($last_videos_down['items'] as $key => $value)
                                @if($key !== 0 && array_key_exists('videoId',$value['id']))
                                    <div class="single-blog-post d-flex">
                                        <div class="post-thumbnail">
                                            <img src="{{$value['snippet']['thumbnails']['default']['url']}}" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="https://www.youtube.com/watch?v={{$value['id']['videoId']}}"
                                               class="post-title">{{$value['snippet']['title']}}</a>
                                            {{--                                            <div class="post-meta d-flex justify-content-between">--}}
                                            {{--                                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 29</a>--}}
                                            {{--                                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 08</a>--}}
                                            {{--                                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 23</a>--}}
                                            {{--                                            </div>--}}
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                        </div>

                        <!-- ***** Single Widget ***** -->
                        <div class="single-widget add-widget mb-50">
                            <a href="#"><img src="/assets/vizew-master/img/bg-img/add.png" alt=""></a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
