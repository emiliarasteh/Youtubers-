<?php


namespace App\Core;


use Illuminate\Container\Container as Application;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

abstract class Base
{

    private $key        = NULL;
    private $channel_id = NULL;
    private $base_url   = NULL;
    protected $url   = NULL;
    public $final_data = [];


    public function __construct()
    {
        $this->key        = config('youtube.key');
        $this->channel_id = config('youtube.channel_id');
        $this->base_url   = config('youtube.base_url');
    }

    protected function cacheData($key)
    {
        if(!Cache::has($key)){
            $response = $this->getData();
            if($response->successful()){
                Cache::remember($key, 3600 * 24, function () use ($response) {
                    return $response->json();
                });
            }
        }
        return Cache::get($key);
    }

    protected function getData(): \Illuminate\Http\Client\Response
    {
        return Http::get(($this->base_url) . $this->url . "&channelId={$this->channel_id}&key={$this->key}");
    }

}
