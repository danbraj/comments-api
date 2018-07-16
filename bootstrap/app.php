<?php

require __DIR__ . '/../vendor/autoload.php';

$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true,
        'db' => [
            'driver' => 'sqlite',
            'database' => __DIR__ . '/../test.db',
            'prefix' => ''
        ]
    ]
]);

$container = $app->getContainer();

$capsule = new \Illuminate\Database\Capsule\Manager;
$capsule->addConnection($container['settings']['db']);
$capsule->setAsGlobal();
$capsule->bootEloquent();

$container['db'] = function ($container) use ($capsule) {
    return $capsule;
};

$container['HomeController'] = function ($container) {
    return new \CommentsApi\Controllers\HomeController($container);
};

$container['CommentsController'] = function ($container) {
    return new \CommentsApi\Controllers\CommentsController($container);
};

require __DIR__ . '/../app/routes.php';