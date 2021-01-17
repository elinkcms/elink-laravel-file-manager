<?php

namespace Elinkcms\ElinkLaravelFileManager\Listeners;

use Illuminate\Support\Str;
use Elinkcms\ElinkLaravelFileManager\Events\AfterGetDirectoryName;

class AfterGetDirectoryNameListener
{
    public function __construct()
    {
        
    }
    
    protected function clearName($name)
    {
        $name = str_replace(array(":", "*", '%', "?", "|", "/"), "_", $name);
        $name = str_replace(";", "_", $name);
        $name = str_replace(" ", "_", $name);
        
        $name = Str::ascii($name);
        
        $name = preg_replace('~[^0-9a-z]+~', '', $name);
        
        return $name;
    }
    
    public function handle(AfterGetDirectoryName $event)
    {
        $name = $event->dirname;
        
        $newDirName = $this->clearName($name);
        
        $event->dirname = $newDirName;
    }
}
