<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $courses = Course::orderBy('id','desc')->get();
        $key = config('youtube.key');
        $channel_id = config('youtube.channel_id');
        $last_videos_url = "activities?order=date&part=snippet&part=contentDetails&channelId=$channel_id&maxResults=10&key=$key";
        $last_videos = $this->getData($last_videos_url);
        $more_viewed_video_url = "search?order=viewCount&part=snippet&channelId=$channel_id&maxResults=10&key=$key";
        $more_viewed_video = $this->getData($more_viewed_video_url)['items'][0];

        $last_videos_down_url = "search?order=date&part=snippet&channelId=$channel_id&maxResults=4&key=$key";
        $last_videos_down = $this->getData($last_videos_down_url);

        $relevance_video_url = "search?order=relevance&part=snippet&channelId=$channel_id&maxResults=10&key=$key";
        $relevance_videos = $this->getData($relevance_video_url);

        $playlists_url = "playlists?order=relevance&part=snippet&channelId=$channel_id&maxResults=4&key=$key";
        $playlists = $this->getData($playlists_url);

        $playlists_videos = [];
        foreach ($playlists['items'] as $playlist){
            $playlists_videos_url = "playlistItems?order=date&part=snippet&channelId=$channel_id&playlistId={$playlist['id']}&maxResults=100&key=$key";
            $data = $this->getData($playlists_videos_url);
            $data['playlist_id'] = $playlist['id'];
            $playlists_videos[] = $data;
        }
//        dd($playlists);
//        &part=contentDetails
        return view('index', compact('courses', 'last_videos', 'more_viewed_video', 'relevance_videos', 'last_videos_down',
        'playlists', 'playlists_videos'));
    }

    public function getData($last_videos_url)
    {
        $base_url = config('youtube.base_url');
        return Http::get(  $base_url.$last_videos_url)->json();
    }

    public function about()
    {

        return view('others.about');
    }

    public function contact()
    {

        return view('others.contact');
    }

    public function question()
    {

        return view('others.question');
    }
    public function show()
    {

    }
}
