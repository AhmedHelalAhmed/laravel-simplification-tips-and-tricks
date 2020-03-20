<?php

namespace App\Http\Controllers;

use App\Actions\DestroyPostAction;
use App\Actions\StorePostAction;
use App\Actions\UpdatePostAction;
use App\Category;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Post;
use App\ViewModels\PostViewModel;

class PostController
{
    public function index()
    {
        $data['posts']=Post::get();

        return view('posts.index', compact('data'));
    }

    public function create()
    {
        return view('posts.create', new PostViewModel());
    }

    public function store(StorePostRequest $request, StorePostAction $storePostAction)
    {
        $storePostAction->execute(new Post(), $request->validated());
        return redirect()->action([static::class,'index']);
    }

    public function edit(Post $post)
    {
        // the PostViewModel called before render the view
        // and after finish the controller logic
        return view('posts.edit', new PostViewModel($post));
    }

    public function update(UpdatePostRequest $request, Post $post, UpdatePostAction $updatePostAction)
    {
        $updatePostAction->execute($post, $request->validated());
        return redirect()->action([static::class,'index']);
    }

    public function destroy(Post $post, DestroyPostAction $destroyPostAction)
    {
        $destroyPostAction->execute($post);
        return redirect()->action([static::class,'index']);
    }
}
