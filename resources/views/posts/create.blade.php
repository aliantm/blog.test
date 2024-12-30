<x-app-layout>
    <h1>Form to create a new Post</h1>
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
    <form action="{{route('posts.store')}}" method="post">
        @csrf
        <label>
            Title
            <input type="text" name="title" value="{{old('title')}}">
        </label>
       {{--@error('title')
            <p>{{$message}}</p>
        @enderror--}}
        <br>
        <br>
        <label>
            Slug
            <input type="text" name="slug" value="{{old('slug')}}">
        </label>
        <br>
        <br>
        <label>
            Categoria
            <input type="text" name="category" value="{{old('category')}}">
        </label>
        <br>
        <br>
        <label>
            Contenido
            <textarea name="content">{{old('content')}}</textarea>
        </label>
        <br>
        <br>
        <button type="submit">Crear Post</button>
    </form>
</x-app-layout>