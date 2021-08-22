<?php

namespace App\Jobs;

use FFMpeg\Format\Video\X264;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
use ProtoneMedia\LaravelFFMpeg\Exporters\HLSVideoFilters;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class VideoMaker implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $data;
    protected $fileName;
    protected $fileNameWithoutExt;


    /**
     * Create a new job instance.
     *
     * @param $data
     * @param $fileName
     * @param $fileNameWithoutExt
     */
    public function __construct($data, $fileName, $fileNameWithoutExt)
    {
        $this->data = $data;
        $this->fileName = $fileName;
        $this->fileNameWithoutExt = $fileNameWithoutExt;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        $fn = ($this->fileNameWithoutExt);
        $saveTo = "videos/$fn";

        $lowFormat  = (new X264('aac'))->setKiloBitrate(500);
        $highFormat = (new X264('aac'))->setKiloBitrate(1000);

        info("Converting ...");
        FFMpeg::fromDisk('uploads')
            ->open($this->fileName)
            ->exportForHLS()
            ->withRotatingEncryptionKey(function($filename, $content){
                Storage::disk('secrets')->put($filename, $content);
            })
            ->addFormat($lowFormat, function (HLSVideoFilters $filters) {
                $filters->resize(1280, 720);
            })
            ->addFormat($highFormat)
            ->onProgress(function ($progress) {
                info("Progress: {$progress}%");
            })
            ->toDisk('public')
            ->save($saveTo);
    }
}
