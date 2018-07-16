<?php

$app->get('/', 'HomeController:index');

$app->get('/comments', function ($request, $response) {
    return '< COMMENTS >';
});