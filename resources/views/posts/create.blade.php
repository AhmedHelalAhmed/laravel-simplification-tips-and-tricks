@extends('layouts.app')
@section('content')
    <div class="contain-fluid">


    <form method="post" action="{{ route('posts.store') }}">
        @csrf
        @method('post')
        <div class="form-group">
            <label for="title">Title</label>
            <input name="title" type="text" class="form-control" id="title">
        </div>
        <div class="form-group">
            <label for="text">Text</label>
            <textarea name="text" class="form-control" id="text" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="category_id">Category</label>
            <select name="category_id" class="form-control" id="category_id">
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-primary" type="submit">Save</button>
    </form>
    </div>
@endsection
