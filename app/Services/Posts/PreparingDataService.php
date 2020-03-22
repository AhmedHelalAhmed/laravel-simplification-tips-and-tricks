<?php
namespace App\Services\Posts;

use App\Category;
use App\Post;
use Illuminate\Database\Eloquent\Collection;
/**
 * Class PreparingDataService
 * @package App\Services\Posts
 */
class PreparingDataService
{
    /**
     * @var
     */
    private $output;

    /**
     * @param Post|null $post
     */
    public function execute(Post $post = null)
    {
        $this->output['post']= $post ?? new Post();
        $this->output['categories']= $this->getCategories();
        return $this->output;
    }

    /**
     * @return Category[]|Collection
     */
    protected function getCategories()
    {
        return Category::all();
    }
}
