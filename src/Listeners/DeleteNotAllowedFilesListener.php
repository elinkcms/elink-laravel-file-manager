<?php

namespace Elinkcms\ElinkLaravelFileManager\Listeners;

use Storage;
use Elinkcms\ElinkLaravelFileManager\Services\ConfigService\ConfigRepository;

class DeleteNotAllowedFilesListener
{
    public function __construct()
    {
        
    }

    public function handle($event)
    {
        $disk =  $event->disk;
        $path = $event->path;
        $folder =  $event->folder;
        
        $configRepository = app(ConfigRepository::class);
        
        $allowTypes = $configRepository->getAllowFileTypes();
        $files = Storage::disk($disk)->allFiles();
        
        foreach ($files as $file) {

            $url = Storage::disk($disk)->url($file);
            
            $fileinfo = pathinfo($url);
            $ext = $fileinfo['extension'];
            
            if (!in_array($ext, $allowTypes)) {
                Storage::disk($disk)->delete($file);
            }
            
        }
    }
}
