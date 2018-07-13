<?php

require __DIR__ . '/../vendor/autoload.php';

$app = new \Slim\App([
    'settings' => [
        'test' => true
    ]
]);

$app->get('/', function ($request, $response) {
    return 'Api';
});