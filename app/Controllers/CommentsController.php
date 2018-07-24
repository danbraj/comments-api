<?php

namespace CommentsApi\Controllers;

use CommentsApi\Models\Site;
use CommentsApi\Models\Comment;
use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CommentsController extends Controller
{
    public function findAll(Request $request, Response $response)
    {
        $comments = Comment::all()->toArray();
        // var_dump($comments);
        return $response->withJson($comments);
    }
    
    public function findOne(Request $request, Response $response, array $args)
    {
        $key = array_key_exists('site_token', $args) ? $args['site_token'] : null;
        if ($key == null)
        {
            return $response->withStatus(400);
        };

        try
        {
            $site = Site::where('token', $key)->firstOrFail();
            $comments = $site->comments()->get()->toArray();
            return $response->withJson($comments);
        }
        catch (ModelNotFoundException $e)
        {
            return $response->withStatus(400);
        };
    }

    public function create(Request $request, Response $response)
    {
        $params = $request->getParsedBody(); // getQueryParams() -> GET
        $key = array_key_exists('token', $params) ? $params['token'] : null;
        if ($key == null)
        {
            return $response->withStatus(401);
        };

        try
        {
            $site = Site::where('token', $key)->firstOrFail();
            // TODO: walidacja parametrów
            $site->comments()->create($params);
        }
        catch (ModelNotFoundException $e)
        {
            return $response->withStatus(400);
        };
        
        return $response->withJson(["notice" => "Comment added"], 201);
    }
    
    // public function update(Request $request, Response $response) {}
    // public function remove(Request $request, Response $response) {}
}
