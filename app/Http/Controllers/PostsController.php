<?php

namespace App\Http\Controllers;

class PostsController extends Controller
{
    public function create()
    {
        return view('posts/create');
    }
}
