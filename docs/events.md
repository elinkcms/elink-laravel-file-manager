# Events

### BeforeInitialization

> Elinkcms\ElinkLaravelFileManager\Events\BeforeInitialization

Example:

```php
\Event::listen('Elinkcms\ElinkLaravelFileManager\Events\BeforeInitialization',
    function ($event) {
        
    }
);
```

### DiskSelected

> Elinkcms\ElinkLaravelFileManager\Events\DiskSelected

Example:

```php
\Event::listen('Elinkcms\ElinkLaravelFileManager\Events\DiskSelected',
    function ($event) {
        \Log::info('DiskSelected:', [$event->disk()]);
    }
);
```

### FilesUploading

> Elinkcms\ElinkLaravelFileManager\Events\FilesUploading

```php
\Event::listen('Elinkcms\ElinkLaravelFileManager\Events\FilesUploading',
    function ($event) {
        \Log::info('FilesUploading:', [
            $event->disk(),
            $event->path(),
            $event->files(),
            $event->overwrite(),
        ]);
    }
);
```

### FilesUploaded

> Elinkcms\ElinkLaravelFileManager\Events\FilesUploaded

```php
\Event::listen('Elinkcms\ElinkLaravelFileManager\Events\FilesUploaded',
    function ($event) {
        \Log::info('FilesUploaded:', [
            $event->disk(),
            $event->path(),
            $event->files(),
            $event->overwrite(),
        ]);
    }
);
```

### Deleting

> Elinkcms\ElinkLaravelFileManager\Events\Deleting

```php
\Event::listen('Elinkcms\ElinkLaravelFileManager\Events\Deleting',
    function ($event) {
        \Log::info('Deleting:', [
            $event->disk(),
            $event->items(),
        ]);
    }
);
```

### Deleted

> Elinkcms\ElinkLaravelFileManager\Events\Deleted

```php
\Event::listen('Elinkcms\ElinkLaravelFileManager\Events\Deleted',
    function ($event) {
        \Log::info('Deleted:', [
            $event->disk(),
            $event->items(),
        ]);
    }
);
```

### Paste

> Elinkcms\ElinkLaravelFileManager\Events\Paste

```php
\Event::listen('Elinkcms\ElinkLaravelFileManager\Events\Paste',
    function ($event) {
        \Log::info('Paste:', [
            $event->disk(),
            $event->path(),
            $event->clipboard(),
        ]);
    }
);
```

### Rename

> Elinkcms\ElinkLaravelFileManager\Events\Rename

```php
\Event::listen('Elinkcms\ElinkLaravelFileManager\Events\Rename',
    function ($event) {
        \Log::info('Rename:', [
            $event->disk(),
            $event->newName(),
            $event->oldName(),
            $event->type(), // 'file' or 'dir'
        ]);
    }
);
```

### Download

> Elinkcms\ElinkLaravelFileManager\Events\Download

```php
\Event::listen('Elinkcms\ElinkLaravelFileManager\Events\Download',
    function ($event) {
        \Log::info('Download:', [
            $event->disk(),
            $event->path(),
        ]);
    }
);
```

*When using a text editor, the file you are editing is also downloaded! And this event is triggered!*

### DirectoryCreating

> Elinkcms\ElinkLaravelFileManager\Events\DirectoryCreating

```php
\Event::listen('Elinkcms\ElinkLaravelFileManager\Events\DirectoryCreating',
    function ($event) {
        \Log::info('DirectoryCreating:', [
            $event->disk(),
            $event->path(),
            $event->name(),
        ]);
    }
);
```

### DirectoryCreated

> Elinkcms\ElinkLaravelFileManager\Events\DirectoryCreated

```php
\Event::listen('Elinkcms\ElinkLaravelFileManager\Events\DirectoryCreated',
    function ($event) {
        \Log::info('DirectoryCreated:', [
            $event->disk(),
            $event->path(),
            $event->name(),
        ]);
    }
);
```

### FileCreating

> Elinkcms\ElinkLaravelFileManager\Events\FileCreating

```php
\Event::listen('Elinkcms\ElinkLaravelFileManager\Events\FileCreating',
    function ($event) {
        \Log::info('FileCreating:', [
            $event->disk(),
            $event->path(),
            $event->name(),
        ]);
    }
);
```

### FileCreated

> Elinkcms\ElinkLaravelFileManager\Events\FileCreated

```php
\Event::listen('Elinkcms\ElinkLaravelFileManager\Events\FileCreated',
    function ($event) {
        \Log::info('FileCreated:', [
            $event->disk(),
            $event->path(),
            $event->name(),
        ]);
    }
);
```

### FileUpdate

> Elinkcms\ElinkLaravelFileManager\Events\FileUpdate

```php
\Event::listen('Elinkcms\ElinkLaravelFileManager\Events\FileUpdate',
    function ($event) {
        \Log::info('FileUpdate:', [
            $event->disk(),
            $event->path(),
        ]);
    }
);
```

### Zip

> Elinkcms\ElinkLaravelFileManager\Events\Zip

```php
\Event::listen('Elinkcms\ElinkLaravelFileManager\Events\Zip',
    function ($event) {
        \Log::info('Zip:', [
            $event->disk(),
            $event->path(),
            $event->name(),
            $event->elements(),
        ]);
    }
);
```

### ZipCreated

> Elinkcms\ElinkLaravelFileManager\Events\ZipCreated

```php
\Event::listen('Elinkcms\ElinkLaravelFileManager\Events\ZipCreated',
    function ($event) {
        \Log::info('ZipCreated:', [
            $event->disk(),
            $event->path(),
            $event->name(),
            $event->elements(),
        ]);
    }
);
```

### ZipFailed

> Elinkcms\ElinkLaravelFileManager\Events\ZipCreated

```php
\Event::listen('Elinkcms\ElinkLaravelFileManager\Events\ZipFailed',
    function ($event) {
        \Log::info('ZipFailed:', [
            $event->disk(),
            $event->path(),
            $event->name(),
            $event->elements(),
        ]);
    }
);
```

### Unzip

> Elinkcms\ElinkLaravelFileManager\Events\Unzip

```php
\Event::listen('Elinkcms\ElinkLaravelFileManager\Events\Unzip',
    function ($event) {
        \Log::info('Unzip:', [
            $event->disk(),
            $event->path(),
            $event->folder(),
        ]);
    }
);
```

### UnzipCreated

> Elinkcms\ElinkLaravelFileManager\Events\UnzipCreated

```php
\Event::listen('Elinkcms\ElinkLaravelFileManager\Events\UnzipCreated',
    function ($event) {
        \Log::info('UnzipCreated:', [
            $event->disk(),
            $event->path(),
            $event->folder(),
        ]);
    }
);
```

### UnzipFailed

> Elinkcms\ElinkLaravelFileManager\Events\UnzipFailed

```php
\Event::listen('Elinkcms\ElinkLaravelFileManager\Events\UnzipFailed',
    function ($event) {
        \Log::info('UnzipFailed:', [
            $event->disk(),
            $event->path(),
            $event->folder(),
        ]);
    }
);
```
