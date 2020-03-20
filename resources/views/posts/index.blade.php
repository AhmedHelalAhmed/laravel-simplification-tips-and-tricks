@extends('layouts.app')
@section('content')
    <div class="mb-1">
        <a href="{{ route('posts.create') }}" class="btn btn-primary">Create</a>
    </div>
    @forelse($data['posts'] as $post)
        <div class="card mt-1" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>
                <p class="card-text">{{$post->text}}</p>
                <a class="btn btn-warning" href="{{ route('posts.edit',$post->id) }}">Edit</a>

            </div>
        </div>
    @empty
        <p>No date</p>
    @endforelse
@endsection
