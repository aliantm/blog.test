<x-app-layout>
    <h1>Form to edit a Post</h1>
    <form action="/posts/{{$post->id}}" method="post">
        @csrf
        @method('put')
        <label>
            Title
            <input type="text" name="title" value="{{$post->title}}">
        </label>
        <br>
        <br>
        <label>
            Categoria
            <input type="text" name="category" value="{{$post->category}}">
        </label>
        <br>
        <br>
        <label>
            Contenido
            <textarea name="content">{{$post->content}}</textarea>
        </label>
        <br>
        <br>
        <button type="submit">Update Post</button>
    </form>
</x-app-layout>