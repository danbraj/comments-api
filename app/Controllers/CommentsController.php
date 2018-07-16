<?php

namespace CommentsApi\Controllers;

use CommentsApi\Models\Comment;

class CommentsController extends Controller
{
    public function index($request, $response)
    {
        $comment = Comment::where('author', 'daniel');
        var_dump($comment);
        die();
        return '< comments >';
    }
}
