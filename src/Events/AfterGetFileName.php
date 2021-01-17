<?php

namespace Elinkcms\ElinkLaravelFileManager\Events;

class AfterGetFileName
{
    public $filename;
    
    public function __construct(string &$fileName)
    {
        $this->filename =& $fileName;
    }
}
