@extends('layout')

@section('content')
    <h1>Posts</h1>

    @foreach ($posts as $post)
        {{--        @dd($loop)--}}
        <article style="border-bottom: 1px solid; width: fit-content; padding: 1rem; margin-bottom: 1rem;">
            <a href="posts/{{ $post->slug }}">
                <!--In blade files, can use the double-braces syntax below to echo things-->
                <h2>{!! $post->title !!}</h2>
            </a>

            <p>
                By <a href="authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->name }}">{{ $post->category->name }}</a>
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
