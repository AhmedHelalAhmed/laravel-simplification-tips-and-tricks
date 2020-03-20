@extends('layouts.app')
@section('content')
    <div class="contain-fluid">
        <form method="post" action="{{ route('posts.store') }}">
            @method('post')
            @include('posts.form')
        </form>
    </div>
@endsection
