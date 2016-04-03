<?php

namespace App\Http\Controllers;

use App\Post;

class TheOnlyController extends Controller
{
    public function example1()
    {
        // findMany
        $posts = Post::findMany(['1', '2', '3']);
        return $posts;
    }
}
