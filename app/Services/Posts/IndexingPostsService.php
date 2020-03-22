<?php
namespace App\Services\Posts;

use App\Post;

/**
 * Class IndexingPostsService
 * @package App\Services\Posts
 */
class IndexingPostsService
{
    /**
     * @var
     */
    private $output;


    public function execute()
    {
        $this->output['posts']=Post::get();
        return $this->output;
    }
}
