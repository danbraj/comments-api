<?php

require __DIR__ . '/../vendor/autoload.php';

$app = new \Slim\App([
    'settings' => [
        'test' => true
    ]
]);

require __DIR__ . '/../app/routes.php';