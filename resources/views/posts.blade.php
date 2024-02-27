@extends('layout')

@section('content')
    <h1>Posts</h1>

    @foreach ($posts as $post)
        {{--        @dd($loop)--}}
        <article>
            <a href="posts/{{ $post->slug }}">
                <!--In blade files, can use the double-braces syntax below to echo things-->
                <h2>{!! $post->title !!}</h2>
            </a>

            <p>
                <a href="#">{{ $post->category->name }}</a>
            </p>

            <div>
                <p>{!! $post->body !!}</p>
            </div>
        </article>
    @endforeach


    <a href="/">
        <button>Return</button>
    </a>
@endsection
