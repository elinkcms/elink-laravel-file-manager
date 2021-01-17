<?php

namespace Elinkcms\ElinkLaravelFileManager\Events;

class AfterGetDirectoryName
{
    public $dirname;
    
    public function __construct(string &$name)
    {
        $this->dirname =& $name;
    }
}
