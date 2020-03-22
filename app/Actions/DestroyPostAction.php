<?php


namespace App\Actions;

use App\Post;

/**
 * Class DestroyPostAction
 * @package App\Actions
 */
class DestroyPostAction
{
    /**
     * @param $post
     * @return int
     */
    public function execute($post)
    {
        return Post::destroy($post->id);
    }
}
