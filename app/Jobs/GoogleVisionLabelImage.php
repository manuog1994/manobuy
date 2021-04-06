<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;
use App\Models\AnnouncementImage;

class GoogleVisionLabelImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $announcement_image_id;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($announcement_image_id)
    {
        $this->announcement_image_id=$announcement_image_id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */

    public function handle()
    {
        $i = AnnouncementImage::findOrFail($this->announcement_image_id);
        $image = file_get_contents(storage_path('/app/'.$i->file));
        putenv('GOOGLE_APPLICATION_CREDENTIALS='.base_path('google_credentials.json'));
        
        $imageAnnotator = new ImageAnnotatorClient();
        $response = $imageAnnotator->labelDetection($image);
        $imageAnnotator->close();
        $labels = $response->getLabelAnnotations();
        if($labels) {
            $result = [];
            foreach($labels as $label){
                $result[]=$label->getDescription();
            }
        }
        $i->labels = $result;
        $i->save();

    }
}
