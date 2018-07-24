<?php

$app->get('/', 'HomeController:index');

$app->get('/comments', 'CommentsController:findAll');

$app->get('/comments/{site_token}', 'CommentsController:findOne');

$app->post('/comments', 'CommentsController:create');

// $app->put('/comments/{site_token}/{id}', 'CommentsController:update');

// $app->delete('/comments/{site_token}/{id}', 'CommentsController:remove');