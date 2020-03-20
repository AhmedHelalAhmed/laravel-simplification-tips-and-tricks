@extends('layouts.app')
@section('content')
    <div class="contain-fluid">
        <form method="post" action="{{ route('posts.store') }}">
            @method('post')
            @include('posts.form')
            <a class="btn btn-info" href="{{ route('posts.index') }}">Back to all posts</a>
        </form>
    </div>
@endsection
