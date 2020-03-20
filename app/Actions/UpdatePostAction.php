<?php


namespace App\Actions;

class UpdatePostAction
{
    public function execute($post, $data)
    {
        return $post->update($data);
    }
}
