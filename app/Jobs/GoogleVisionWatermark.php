<?php

namespace App\Jobs;

use Spatie\Image\Image;
use Illuminate\Bus\Queueable;
use Spatie\Image\Manipulations;
use App\Models\AnnouncementImage;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;

class GoogleVisionWatermark implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    private $announcement_image_id;

    public function __construct($announcement_image_id)
    {
        $this->announcement_image_id = $announcement_image_id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $i = AnnouncementImage::find($this->announcement_image_id);
        if (!$i) {
            return;
        }

         $srcPath = storage_path('/app/' . $i->file);
         $image = file_get_contents($srcPath);

    

            $image = Image::load($srcPath);

            $image
                    // ->watermark(base_path('resources/img/smile.png'))
                    // ->watermarkPosition('top-left')
                    // ->watermarkPadding($bounds[0][0], $bounds[0][1])
                    // ->watermarkWidth($w, Manipulations::UNIT_PIXELS)
                    // ->watermarkHeight($h, Manipulations::UNIT_PIXELS)
                    // ->watermarkFit(Manipulations::FIT_STRETCH);
            
                    ->watermark(base_path('resources/img/smile.png'))
                    ->watermarkOpacity(50)
                    ->watermarkPosition(Manipulations::POSITION_CENTER)
                    ->watermarkHeight(100, Manipulations::UNIT_PERCENT)    
                    ->watermarkWidth(100, Manipulations::UNIT_PERCENT);      
                
                
                $image->save($srcPath);
               
        
        }

    

    }






