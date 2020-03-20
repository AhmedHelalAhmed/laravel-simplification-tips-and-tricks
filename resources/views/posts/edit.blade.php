@extends('layouts.app')
@section('content')
    <div class="contain-fluid">
        <form method="post" action="{{ route('posts.update',$post->id) }}">
            @method('put')
            @include('posts.form')
            <a class="btn btn-info" href="{{ route('posts.index') }}">Back to all posts</a>
        </form>
    </div>
@endsection

