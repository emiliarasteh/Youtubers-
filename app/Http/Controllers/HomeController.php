<?php

namespace App\Http\Controllers;

use App\Core\DataService;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * @var DataService
     */
    public $dataService;

    /**
     * Create a new controller instance.
     *
     * @param DataService $dataService
     */



    public function __construct(DataService $dataService)
    {
        $this->dataService = $dataService;
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $youtubeData = $this->dataService->exposeData();
        $courses = Course::orderBy('id','desc')->get();
        $last_videos = $youtubeData['last_videos'];
        $more_viewed_video = $youtubeData['more_viewed_video']['items'][0];
        $last_videos_down = $youtubeData['last_videos_down'];
        $relevance_videos = $youtubeData['relevance_videos'];
        $playlists = $youtubeData['playlists'];
        $playlists_videos = [];
        foreach ($playlists['items'] as $playlist){
            $data = $youtubeData[$playlist['id']];
            $data['playlist_id'] = $playlist['id'];
            $playlists_videos[] = $data;
        }

        return view('index', compact('courses', 'last_videos', 'more_viewed_video', 'relevance_videos', 'last_videos_down',
        'playlists', 'playlists_videos'));
    }

    public function getData($last_videos_url)
    {
        $base_url = config('youtube.base_url');
        return Http::get(  $base_url.$last_videos_url)->json();
    }

    public function cacheData($key)
    {
        $value = Cache::remember('users', 3600*24, function () {
            return DB::table('users')->get();
        });
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
