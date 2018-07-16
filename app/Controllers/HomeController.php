<?php

namespace CommentsApi\Controllers;

class HomeController extends Controller
{
    public function index($request, $response)
    {
        $response->getBody()->write('{"info":"Hello ;)","version":"v1.0"}');
        return $response->withHeader('Content-Type', 'application/json');
    }
}
