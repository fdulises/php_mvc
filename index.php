<?php

spl_autoload_register(function($classname){

    $dir_list = [
        'libs' => 'libs',
        'models' => 'models',
        'views' => 'views',
        'controllers' => 'controllers',
    ];
    
    $classname = explode("\\", $classname);
    
    $file = realpath(
        __DIR__ . "/{$classname[0]}/{$classname[array_key_last($classname)]}.php" 
    );
    
    if( file_exists($file) ) require $file;
});

$url = $_GET['url'] ?? '';

$request = explode("/", $url);

$usuarioController = new controllers\usuario;

echo $usuarioController->get(1);

