<?php

namespace Elinkcms\ElinkLaravelFileManager\Listeners;

use Illuminate\Support\Str;
use Elinkcms\ElinkLaravelFileManager\Events\AfterGetFileName;

class AfterGetFileNameListener
{
    public function __construct()
    {
        
    }
    
    protected function clearImageName($name)
    {
        $name = str_replace([":", "*", '%', "?", "|", "/"], "_", $name);
        
        $name = str_replace(";", "_", $name);
        $name = str_replace(" ", "_", $name);
        
        $name = Str::ascii($name);
        
        $name = preg_replace('~[^0-9a-z]+~', '', $name);
        
        return $name;
    }
    
    public function handle(AfterGetFileName $event)
    {
        $info = new \SplFileInfo($event->filename);
        $ext = $info->getExtension();
        
        $fileName = str_replace('.'.$ext, '', $event->filename);
        
        $newFileName = $this->clearImageName($fileName);
        
        $event->filename = $newFileName.'.'.$ext;
    }
}
