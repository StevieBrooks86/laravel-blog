<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>
<body>

    <h1>Posts</h1>

    @foreach ($posts as $post)
        @dd($loop)
        <article>
            <a href="posts/{{ $post->slug }}">
                <!--In blade files, can use the double-braces syntax below to echo things-->
                <h2>{{ $post->title }}</h2>
            </a>

            <div>
                <p>{{ $post->excerpt }}</p>
            </div>
        </article>
    @endforeach

    <a href="/">
        <button>Return</button>
    </a>

</body>
</html>
