<x-app-layout>
    <h1>Here will show all posts</h1>
    <a href="{{route('posts.create')}}">Create New Post</a>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{route('posts.show',$post)}}">
                    {{$post->title}}
                </a>
            </li>
        @endforeach
    </ul>
    {{$posts->links()}}
</x-app-loyout>
