@extends('layouts.app')
@extends('layouts.app')
@section('content')
    <div class="contain-fluid">
        <form method="post" action="{{ route('posts.update',$post->id) }}">
            @method('put')
            @include('posts.form')
        </form>
    </div>
@endsection

