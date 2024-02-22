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

    <?php foreach ($posts as $post): ?>
        <article>
            <a href="posts/<?php echo $post->slug; ?>">
                <h2><?php echo $post->title; ?></h2>
            </a>

            <div>
                <p><?php echo $post->excerpt; ?></p>
            </div>
        </article>
    <?php endforeach; ?>

    <a href="/">
        <button>Return</button>
    </a>

</body>
</html>
