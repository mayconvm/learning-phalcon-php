<?php

use Phalcon\Config;
use Phalcon\Logger;

return new Config([
    'database' => [
        'adapter' => 'Mysql',
        'host' => '127.0.0.1',
        'username' => 'root',
        'password' => '',
        'dbname' => 'app',
    ],
    'application' => [
        'controllersDir' => APP_PATH . '/controllers/',
        'modelsDir'      => APP_PATH . '/models/',
        'viewsDir'       => APP_PATH . '/views/',
        'cacheDir'       => BASE_PATH . '/cache/',
        // 'formsDir'       => APP_PATH . '/forms/',
        // 'libraryDir'     => APP_PATH . '/library/',
        // 'pluginsDir'     => APP_PATH . '/plugins/',
        'baseUri'        => '/',
        'publicUrl'      => 'app.phalcon.dev',
        'cryptSalt'      => 'absdhjgqw445872364237tiuhk',
    ],
    'mail' => [
        'fromName' => 'App',
        'fromEmail' => 'app@example.com',
        'smtp' => [
            'server' => 'smtp.gmail.com',
            'port' => 587,
            'security' => 'tls',
            'username' => '',
            'password' => '',
        ],
    ],
    'logger' => [
        'path'     => BASE_PATH . '/logs/',
        'format'   => '%date% [%type%] %message%',
        'date'     => 'D j H:i:s',
        'logLevel' => 7, #Logger::DEBUG,
        'filename' => 'application.log',
    ],
]);
