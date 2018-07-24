<?php

namespace CommentsApi\Controllers;

use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;

class HomeController extends Controller
{
    public function index(Request $request, Response $response)
    {
        return $response->withJson([
            "info" => "Hello ;)",
            "version" => "v1.0"
        ], 200);
    }
}
