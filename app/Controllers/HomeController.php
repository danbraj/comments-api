<?php

namespace CommentsApi\Controllers;

class HomeController extends Controller
{
    public function index($request, $response)
    {
        return '{version: "v1.0"}';
    }
}
