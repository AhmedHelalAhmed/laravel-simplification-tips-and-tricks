<?php

namespace App\ViewModels;

use App\Category;
use App\Post;
use Spatie\ViewModels\ViewModel;

class PostViewModel extends ViewModel
{
    /**
     * @var Post
     */
    protected $post;

    /**
     * PostViewModel constructor.
     * @param Post|null $post
     */
    public function __construct(Post $post=null)
    {
        $this->post = $post ?? new Post();
    }

    /**
     * @return Category[]|Collection
     */
    public function categories()
    {
        return Category::all();
    }

    /**
     * @return Post|null
     */
    public function post()
    {
        return $this->post;
    }
}
