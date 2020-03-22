<?php

namespace App\Http\Controllers;

use App\Actions\DestroyPostAction;
use App\Actions\StorePostAction;
use App\Actions\UpdatePostAction;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Post;
use App\Services\Posts\IndexingPostsService;
use App\Services\Posts\PreparingDataService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

/**
 * Class PostController
 * @package App\Http\Controllers
 */
class PostController
{
    /**
     * @return Factory|View
     */
    public function index()
    {
        $output=app(IndexingPostsService::class)->execute();
        return view('posts.index', compact('output'));
    }

    /**
     * @return Factory|View
     */
    public function create()
    {
        $output=app(PreparingDataService::class)->execute();
        return view('posts.create', compact('output'));
    }

    /**
     * @param StorePostRequest $request
     * @param StorePostAction $storePostAction
     * @return RedirectResponse
     */
    public function store(StorePostRequest $request, StorePostAction $storePostAction)
    {
        $input=$request->validated();
        $input['post']=new Post();
        $output=$storePostAction->execute($input);

        if (!$output) {
            session()->flash('failed', "Error");
            return redirect()->action([static::class,'index']);
        }

        session()->flash('success', "Success");
        return redirect()->action([static::class,'index']);
    }

    /**
     * @param Post $post
     * @return Factory|View
     */
    public function edit(Post $post)
    {
        $output=app(PreparingDataService::class)->execute($post);
        return view('posts.edit', compact('output'));
    }

    /**
     * @param UpdatePostRequest $request
     * @param Post $post
     * @param UpdatePostAction $updatePostAction
     * @return RedirectResponse
     */
    public function update(UpdatePostRequest $request, Post $post, UpdatePostAction $updatePostAction)
    {
        $input=$request->validated();
        $input['post']=$post;
        $output=$updatePostAction->execute($input);

        if (!$output) {
            session()->flash('failed', "Error");
        } else {
            session()->flash('success', "Success");
        }

        return redirect()->action([static::class,'index']);
    }

    /**
     * @param Post $post
     * @param DestroyPostAction $destroyPostAction
     * @return RedirectResponse
     */
    public function destroy(Post $post, DestroyPostAction $destroyPostAction)
    {
        $output=$destroyPostAction->execute($post);

        if (!$output) {
            session()->flash('failed', "Error");
        } else {
            session()->flash('success', "Success");
        }

        return redirect()->action([static::class,'index']);
    }
}
