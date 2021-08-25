<?php


namespace App\Core;


class Youtube extends Base implements DataService
{
    public function __construct()
    {
        parent::__construct();
        $this->last_videos();
        $this->more_viewed_video();
        $this->last_videos_down();
        $this->relevance_videos();
        $this->playlists();

    }

    protected function last_videos()
    {
        $this->url = "activities?order=date&part=snippet&part=contentDetails&maxResults=10";

        $this->final_data["last_videos"] = $this->cacheData('last_videos');
    }

    protected function more_viewed_video()
    {
        $this->url = "search?order=viewCount&part=snippet&maxResults=10";

        $this->final_data["more_viewed_video"] = $this->cacheData('more_viewed_video');
    }

    protected function last_videos_down()
    {
        $this->url = "search?order=date&part=snippet&maxResults=4";

        $this->final_data["last_videos_down"] = $this->cacheData('last_videos_down');
    }

    protected function relevance_videos()
    {
        $this->url = "search?order=relevance&part=snippet&maxResults=10";

        $this->final_data["relevance_videos"] = $this->cacheData('relevance_videos');
    }

    protected function playlists()
    {
        $this->url = "playlists?order=relevance&part=snippet&maxResults=4";

        $this->final_data["playlists"] = $this->cacheData('playlists');

        foreach ($this->final_data["playlists"]['items'] as $playlist){
            $this->playlistData($playlist['id']);
        }
    }

    protected function playlistData($playlist_id)
    {
        $this->url = "playlistItems?order=date&part=snippet&playlistId=$playlist_id&maxResults=100";
        $this->final_data["$playlist_id"] = $this->cacheData("{$playlist_id}playlistData");
    }


    public function exposeData()
    {
        return $this->final_data;
    }
}
