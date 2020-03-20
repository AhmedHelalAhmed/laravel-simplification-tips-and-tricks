<?php


namespace App\Actions;

use App\Post;

class StorePostAction
{
    public function execute($post, $data)
    {
        $post->title = $data['title'];
        $post->text = $data['text'];
        $post->category_id = $data['category_id'];
        $post->save();
        return $post;
    }
}
