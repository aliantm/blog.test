<x-app-layout>
    <h1>Form to edit a Post</h1>
    @if ($errors->any())
        <div>
            <h2>All errors</h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('posts.update',$post)}}" method="post">
        @csrf
        @method('put')
        <label>
            Title
            <input type="text" name="title" value="{{old('title',$post->title)}}">
        </label>
        <br>
        <br>
        <label>
            Slug
            <input type="text" name="slug" value="{{old('slug',$post->slug)}}">
        </label>
        <br>
        <br>
        <label>
            Categoria
            <input type="text" name="category" value="{{old('category',$post->category)}}">
        </label>
        <br>
        <br>
        <label>
            Contenido
            <textarea name="content">{{old('content',$post->content)}}</textarea>
        </label>
        <br>
        <br>
        <button type="submit">Update Post</button>
    </form>
</x-app-layout>