<?php

$app->get('/', 'HomeController:index');

$app->get('/comments/{site_id}', 'CommentsController:index');

$app->post('/comments/{site_id}/add', 'CommentsController:add');

// $app->put('/comments/{site_id}/update/{id}', 'CommentsController:update');

// $app->delete('/comments/{site_id}/delete/{id}', 'CommentsController:delete');