<?php

namespace App\Jobs;

use Spatie\Image\Image;
use Illuminate\Bus\Queueable;
use Spatie\Image\Manipulations;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class ResizeImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    private $path, $fileName, $width, $height;

    public function __construct($filePath, $width, $height )
    {
        $this->path = dirname($filePath);
        $this->fileName = basename($filePath);
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $width= $this->width;
        $height= $this->height;
        $srcPath= storage_path() . '/app/' . $this->path . '/' . $this->fileName;

        $destinationPath= storage_path() . '/app/' . $this->path . "/crop{$width}x{$height}_" . $this->fileName;
        

      


        Image::load($srcPath)
        ->watermark(base_path('resources/img/watermark.png'))
        ->watermarkPosition(Manipulations::POSITION_BOTTOM_RIGHT)
        ->watermarkHeight(50, Manipulations::UNIT_PERCENT)    
        ->watermarkWidth(50, Manipulations::UNIT_PERCENT)
        ->crop(Manipulations::CROP_CENTER, $width, $height)->save($destinationPath);
    }

}

