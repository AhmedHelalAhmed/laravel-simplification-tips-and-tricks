<?php
namespace App\Actions;

use App\Post;

/**
 * Class PublishPostAction
 * @package App\Actions
 */
class PublishPostAction
{
    /**
     * @var Post
     */
    private $post;

    /**
     * @param Post $post
     */
    public function execute(Post $post)
    {
        $this->post=$post;
        $this->markAsPublished();
        // publish to twitter
        // do some stuff
    }

    protected function markAsPublished()
    {
        $this->post->update(['published_data'=>now()]);
    }
}
