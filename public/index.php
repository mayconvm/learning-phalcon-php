<?php

use Phalcon\Loader;
use Phalcon\Mvc\View;
use Phalcon\Mvc\Application;
use Phalcon\Mvc\Url as UrlProvider;

// Define some absolute path constants to aid in locating resources
error_reporting(E_ALL);
define('BASE_PATH', dirname(__DIR__));
define('APP_PATH', BASE_PATH . '/src');

# https://github.com/phalcon/vokuro/blob/master/app/config/loader.php
# to enabled in this project
// include_once("../vendor/autoload.php");

$di = include APP_PATH . "/config/services.php";
include APP_PATH . '/config/loader.php';

try {

    $application = new Application($di);

    // Handle the request
    $response = $application->handle();

    $response->send();
} catch (\Exception $e) {
    echo 'Exception: ', $e->getMessage();
}
