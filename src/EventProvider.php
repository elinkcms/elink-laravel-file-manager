<?php

namespace Elinkcms\ElinkLaravelFileManager;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Elinkcms\ElinkLaravelFileManager\Events\Unzip as UnzipEvent;
use Elinkcms\ElinkLaravelFileManager\Events\AfterUnzipEvent;
use Elinkcms\ElinkLaravelFileManager\Listeners\DeleteNotAllowedFilesListener;
use Elinkcms\ElinkLaravelFileManager\Events\AfterGetDirectoryName;
use Elinkcms\ElinkLaravelFileManager\Listeners\AfterGetDirectoryNameListener;

class EventProvider extends ServiceProvider
{
    protected $listen = [
        AfterUnzipEvent::class => [
            DeleteNotAllowedFilesListener::class,
        ],
        'Elinkcms\ElinkLaravelFileManager\Events\AfterGetFileName' => [
            'Elinkcms\ElinkLaravelFileManager\Listeners\AfterGetFileNameListener',
        ],
        AfterGetDirectoryName::class => [
            AfterGetDirectoryNameListener::class,
        ],
    ];
    
    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }
}