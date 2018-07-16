<?php

namespace CommentsApi\Controllers;

class HomeController
{
    public function index($request, $response)
    {
        return '{version: "v1.0"}';
    }
}
