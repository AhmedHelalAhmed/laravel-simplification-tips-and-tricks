@extends('layouts.app')
@extends('layouts.app')
@section('content')
    {!! dump('in view') !!}
    <div class="contain-fluid">
        {!! dd($categories) !!}
        <form method="post" action="{{ route('posts.update',$data->post->id) }}">
            @method('put')
            @include('posts.form')
        </form>
    </div>
@endsection

