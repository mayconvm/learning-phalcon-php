<?php

use Phalcon\Loader;

$config = include 'config.php';

$loader = new Loader();
$loader->registerNamespaces([
    'App\Models'      => $config->application->modelsDir,
    'App\Controllers' => $config->application->controllersDir,
    // 'App\Forms'       => $config->application->formsDir,
    // 'App'             => $config->application->libraryDir
]);

$loader->register();

// Use composer autoloader to load vendor classes
// require_once BASE_PATH . '/vendor/autoload.php';
