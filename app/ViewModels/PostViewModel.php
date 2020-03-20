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
    public $post;
    /**
     * @var Category[]|\Illuminate\Database\Eloquent\Collection
     */
    public $categories;

    public function __construct(Post $post=null)
    {

        $this->post = $post ?? new Post();
        $this->categories=Category::all();
    }
}
