@extends('layout')

@section('content')
    <h1>
        {!! $post->title  !!}

    </h1>

    <p>
        By <a href="#">{{ $post->author->username }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
    </p>

    <p>
        <em>
            Date Posted: {{ $post->created_at }}
        </em>
    </p>

    <br>
    <!--To escape HTML tags when echoing variables this way, use a single curly bracket and double quotes, as below-->
    <div>
        {!! $post->body !!}
    </div>
    <a href="/posts">Go back</a>
@endsection
