<?php

spl_autoload_register(function ($class) {

    $prefix = 'Api\\';
    
    $class = str_replace($prefix, '', $class);
    $class = str_replace('\\', '/', $class);

    $base_dir = __DIR__ . '/../';

    $file = $base_dir . $class . '.php';

    if (file_exists($file)) {
        require $file;
    }
    
});