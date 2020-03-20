<?php


namespace App\Actions;

use App\Post;

class DestroyPostAction
{
    public function execute($post)
    {
        return Post::destroy($post->id);
    }
}
