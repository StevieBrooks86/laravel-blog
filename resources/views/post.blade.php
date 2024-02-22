@extends('layout')

@section('content')
    <h1>
        {{ $post->title }}

    </h1>

    <p>
        <em>
            Date Posted: {{ $post->date }}
        </em>
    </p>

    <br>
    <!--To escape HTML tags when echoing variables this way, use a single curly bracket and double quotes, as below-->
    {!! $post->body !!}
@endsection
