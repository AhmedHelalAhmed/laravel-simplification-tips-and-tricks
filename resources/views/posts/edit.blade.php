@extends('layouts.app')
    @extends('layouts.app')
@section('content')
    <div class="contain-fluid">

        <form method="post" action="{{ route('posts.update',$post->id) }}">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="title">Title</label>
                <input value="{{$post->title}}" name="title" type="text" class="form-control" id="title">
            </div>
            <div class="form-group">
                <label for="text">Text</label>
                <textarea name="text" class="form-control" id="text" rows="3">{{$post->text}}</textarea>
            </div>
            <div class="form-group">
                <label for="category_id">Category</label>
                <select name="category_id" class="form-control" id="category_id">
                    @foreach($categories as $category)
                        <option @if($post->category_id==$category->id) selected @endif value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-primary" type="submit">Save</button>
        </form>
    </div>
@endsection

