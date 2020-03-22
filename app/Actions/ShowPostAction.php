<?php
namespace App\Actions;

use App\Post;

/**
 * Class ShowPostAction
 * @package App\Actions
 */
class ShowPostAction
{
    /**
     * @var
     */
    private $post;

    /**
     * @param int $id
     * @return mixed
     */
    public function execute(int $id)
    {
        $this->setPostById($id);
        // do some thing else
        return $this->post;
    }

    /**
     * @param int $id
     * set the post by given id
     */
    protected function setPostById(int $id)
    {
        $this->post = Post::find($id);
    }
}
