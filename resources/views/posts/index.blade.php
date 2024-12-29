<x-app-layout>
    <h1>Here will show all posts</h1>
    <a href="/posts/create">Create New Post</a>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="/posts/{{$post->id}}">
                    {{$post->title}}
                </a>
            </li>
        @endforeach
    </ul>
    {{$posts->links()}}
</x-app-loyout>
