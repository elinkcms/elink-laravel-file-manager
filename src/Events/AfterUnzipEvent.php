<?php

namespace Elinkcms\ElinkLaravelFileManager\Events;

use Illuminate\Http\Request;

class AfterUnzipEvent
{
    public $disk;

    public $path;

    public $folder;

    public function __construct(Request $request)
    {
        $this->disk = $request->input('disk');
        $this->path = $request->input('path');
        $this->folder = $request->input('folder');
    }
    
}
