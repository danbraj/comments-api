<?php

namespace CommentsApi\Controllers;

use CommentsApi\Models\Comment;

class CommentsController extends Controller
{
    public function index($request, $response, array $args)
    {
        if (isset($args['site_id']) && $args['site_id'] != '')
        {
            $comments = Comment::where('site_id', $args['site_id'])->get()->toArray();
            
            $response->getBody()->write(json_encode($comments));
            return $response->withHeader('Content-Type', 'application/json');
        }

        // $comments = Comment::all();
        // var_dump($comments);

        // $comment = Comment::find(1);
        // var_dump($comment);
    }

    public function add($request, $response, array $args)
    {
        if (isset($args['site_id']) && $args['site_id'] != '')
        {
            Comment::create([
                'site_id' => $args['site_id'],
                'content' => $request->getParam('content'),
                'author' => $request->getParam('author'),
                'email' => $request->getParam('email')
            ]);

            $response->getBody()->write('{"notice":"Comment added"}');
            return $response->withHeader('Content-Type', 'application/json');
        }
    }
}
