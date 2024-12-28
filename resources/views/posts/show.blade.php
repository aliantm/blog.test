<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11 | Posts</title>
</head>
<body>
    <a href="/posts">Return to Post</a>
    <h1> Titulo: {{$post->title}} </h1>
    <p>
        <b>Categoria: </b> {{$post->category}}
    </p>
    <p>
        {{$post->content}}
    </p>
    <a href="/posts/{{$post->id}}/edit">
        Edit Post
    </a>
    <form action="/posts/{{$post->id}}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Delete Post</button>
    </form>
</body>
</html>