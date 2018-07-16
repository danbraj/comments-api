<?php

$app->get('/', 'HomeController:index');

$app->get('/comments', 'CommentsController:index');