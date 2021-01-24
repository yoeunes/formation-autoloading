<?php

$autoloadDirs = [
    __DIR__.'/Controller/',
    __DIR__.'/Core/',
];

spl_autoload_register(function ($class) use ($autoloadDirs) {
    foreach ($autoloadDirs as $directory) {
        if (file_exists($path = $directory.$class.'.php')) {
            include_once $path;
        }
    }
});
