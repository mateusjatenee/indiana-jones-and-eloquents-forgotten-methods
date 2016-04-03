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

    public function example2()
    {
        // firstOrCreate
        $posts = Post::firstOrCreate([
            'title' => 'This one doesnt exist',
            'content' => 'Whatever',
        ]);

        return $posts;
    }

    public function example3()
    {
        $posts = Post::find(['1', '2', '3'])->each(function ($item, $key) {
            $item->update(['title' => 'Whatever']);
        });

        return $posts;
    }
}
