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
    public function __construct(Post $post = null)
    {
//        dump('in PostViewModel constructor');

        $this->post = $post ?? new Post();
    }

    /**
     * @return Category[]|Collection
     */
    public function categories()
    {
//        dump('in categories');
        return Category::all();
    }

//    public function method1()
//    {
//        dump('method1');
//    }
//    public function method2()
//    {
//        dump('method2');
//    }


    /**
     * @return Post|null
     */
    public function post()
    {
//        dump('in post method');

        return $this->post;
    }

    public function isSelected(Category $category): bool
    {
        return old('category_id', $this->post->category_id) == $category->id;
    }
}
