<x-app-layout>
    <h1>Form to create a new Post</h1>
    <form action="{{route('posts.store')}}" method="post">
        @csrf
        <label>
            Title
            <input type="text" name="title">
        </label>
        <br>
        <br>
        <label>
            Categoria
            <input type="text" name="category">
        </label>
        <br>
        <br>
        <label>
            Contenido
            <textarea name="content"></textarea>
        </label>
        <br>
        <br>
        <button type="submit">Crear Post</button>
    </form>
</x-app-layout>