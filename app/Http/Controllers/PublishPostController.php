<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublishPostController extends Controller
{
    /**
     * @var PublishPostAction
     */
    private $publishPostAction;

    public function __construct(PublishPostAction $publishPostAction)
    {

        $this->publishPostAction = $publishPostAction;
    }

    /**
     * @param Post $post
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(Post $post)
    {
        $this->publishPostAction->execute($post);

        flash()->sucess('Your post has been published');

        return back();
    }
}
