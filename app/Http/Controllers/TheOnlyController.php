<?php

namespace App\Http\Controllers;

use App\Post;

class TheOnlyController extends Controller
{
    public function getFirstSecondAndThirdPosts()
    {
        $posts = Post::findMany(['1', '2', '3']);
        return $posts;
    }
}
